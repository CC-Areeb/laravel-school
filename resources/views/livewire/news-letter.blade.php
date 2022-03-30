<div class="text-center mt-5">
        {{-- The whole world belongs to you. --}}

    <textarea name="" class="mb-5" id="" cols="80" rows="10" wire:model="newNewsletter"
        placeholder="What's on your mind"></textarea>

    <div class="text-center">
        <button wire:click="addNews" class="btn btn-outline-success mb-5">Add newsletter</button>
    </div>

    @foreach ($news as $comment)

    <div class="shadow-lg p-3 mb-5 bg-body rounded comment_box">
        <p class="">
            {{$comment['owner']}}
            <br>

            {{$comment['time']}}
        </p>

        <p>
            {{$comment['body']}}
        </p>
    </div>

    @endforeach
</div>