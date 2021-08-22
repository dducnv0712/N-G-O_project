@props(['submit'])

<div >

    <div >
        <form wire:submit.prevent="{{ $submit }}">
            <div>
                <div >
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
