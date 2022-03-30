<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class NewsLetter extends Component
{

    public $body;
    public $time;
    public $owner;

    // public $news = [
    //     [
    //         'body' => 'this is a sample and i am still testing, hopefully we will make it in time',
    //         'time' => '2 minutes ago',
    //         'owner' => 'David',
    //     ]
    // ];

    public  $newNewsletter;

    public function mount($news)
    {
        $this->body = $news->body;
        $this->time = $news->time;
        $this->owner = $news->owner;
    }

    public function addNews()
    {
        array_unshift($this->news,[
            'body' => $this->newNewsletter,
            'time' => Carbon::now()->diffForHumans(),
            'owner' => 'Jones',
        ]);
    }

    public function render()
    {
        return view('livewire.news-letter');
    }
}
