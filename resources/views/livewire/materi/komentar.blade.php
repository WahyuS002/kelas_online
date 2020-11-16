<div class="widget-content widget-content-area notation-text-icon mt-3">

    <h5 class="mb-3">Komentar</h5>
    <hr>

    <div class="row">
        <div class="col-md-7">

            @foreach ($comments as $comment)
            <div class="media" x-data="{ open: false }">
                <img class=" rounded" src="{{ asset('cork/assets/img/90x90.jpg') }}" alt="pic1">
                <div class="media-body">

                    <h4 class="media-heading">Heading</h4>
                    <p class="media-text">{{ $comment->komentar }}</p>
                    <div class="media-notation">
                        <a @click="open = true" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Reply </a>
                        <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit </a>
                    </div>

                    <div class="card mt-3 mb-3" x-show="open">
                        <div class="card-body">
                            <textarea class="form-control" name="comment_value" cols="30" rows="4" wire:model="sub_comment_value" style="resize: none;"></textarea>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary" @click="open = false">Gak Jadi</button>
                                <button class="btn btn-outline-primary" wire:click="subComment({{ $comment->id }})">Balas</button>
                            </div>
                        </div>
                    </div>

                    @foreach ($subComments as $sub)
                        @if ($sub->id_komentar == $comment->id)
                        <div class="media">
                            <img class=" rounded" src="{{ asset('cork/assets/img/90x90.jpg') }}" alt="pic1">
                            <div class="media-body">
                                <h4 class="media-heading">Heading</h4>
                                <p class="media-text">{{ $sub->komentar }}</p>
                                <div class="media-notation">
                                    <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach

            @if ($all_comments > $comments->count())
            <a wire:click="load" class="btn btn-primary my-3">Load More</a>
            @endif

            <div class="card">
                <form wire:submit.prevent="comment">
                    <div class="card-body">
                        <textarea class="form-control" name="comment_value" cols="30" rows="4" wire:model="comment_value" style="resize: none;"></textarea>
                    </div>
                    <div class="card-footer text-muted">
                        <button class="btn btn-outline-primary" type="submit">Komentar</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>

    </div>

</div>