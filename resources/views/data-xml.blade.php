<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    @foreach($registros as $item)
    <País>
        <idioma>{{ $item->idioma }}</idioma>
        <idh>{{ $item->idh }}</idh>
        <titulos_copa_mundo>{{ $item->titulos_copa_mundo }}</titulos_copa_mundo>
        <populacao>{{ $item->populacao }}</populacao>
        <tamanho>{{ $item->tamanho }}</tamanho>
    </País>
    @endforeach
</data>
