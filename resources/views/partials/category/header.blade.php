<div class="h-hero relative flex flex-col items-center">
    <div class="talents-wall h-hero w-full overflow-hidden flex flex-col items-center justify-center" :style="{
            'background': 'url(http://127.0.0.1:8000/images/joanna-kosinska-129039-unsplash.jpg)',
            'backgroundPosition': 'center',
        }">

        <h2>
            {{$category->label}}
        </h2>
        <p>
            {{count($photos)}} photos
        </p>
    </div>
</div>