<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class NoteController extends Controller
{
    private $seconds = 3600;

    private function _fetchNote($id)
    {
        $value = Cache::remember('note_'.$id, $this->seconds, function () use ($id) {
            return Note::findOrFail($id);
        });

        return $value;
    }

    public function all()
    {
        $a = Note::all()->toArray();
        echo '<pre>';
        var_dump($a);
    }

    private function _deleteCacheNote($id)
    {
        Cache::forget('note_'.$id);

        return true;
    }

    public function index()
    {
        return view('landing');
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'password' => 'required',
        ]);

        $availableAt = $request->available_after
            ? Carbon::now()->addMinutes($request->available_after)
            : null;

        $note = Note::create([
            'content' => $request->content,
            'password' => bcrypt($request->password),
            'password_hint' => $request->password_hint,
            'available_at' => $availableAt,
        ]);

        return redirect()->route('notes.show', $note->id)->with('link', route('notes.show', $note->id));
    }

    public function show($id)
    {
        $note = $this->_fetchNote($id);

        return view('notes.show', compact('note'));
    }

    public function verify(Request $request, $id)
    {
        $note = $this->_fetchNote($id);

        if ($note->available_at && Carbon::now()->lt($note->available_at)) {
            return back()->withErrors(['message' => 'This note is not yet available.']);
        }

        if (! password_verify($request->password, $note->password)) {
            return back()->withErrors(['password' => 'Invalid password.']);
        }

        return view('notes.view', ['content' => $note->content, 'id' => $id]);
    }
}
