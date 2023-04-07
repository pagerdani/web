<div class="container  my-3">
    <div class="row">
        <div class="col">
            <div class="font-semibold text-gray-600 hover:text-gray-900">
                <div class="row">
                    @foreach($links as $link)
                        <div class="col">
                            <a href="{{ $link['url'] }}">
                                <div style="border: 1px solid #A9A9A9; border-radius: 20px" class="text-center  dark:text-gray-400 dark:hover:text-white">
                                    {{$link['name']}}
                                </div>
                            </a>    
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>