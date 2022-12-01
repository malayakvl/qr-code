<div class="card-body">
    <p class="mb-2">Content Link: {{ $data['contentLink'] }}</p>
    {!! QrCode::size($data['size'])
            ->backgroundColor($data['bgColorArr'][0], $data['bgColorArr'][1], $data['bgColorArr'][2])
            ->color($data['fillColorArr'][0], $data['fillColorArr'][1], $data['fillColorArr'][2])
            ->generate($data['contentLink'])
    !!}
</div>
