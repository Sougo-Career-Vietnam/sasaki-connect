
@if($navItem)
@php
$linkUrl = $navItem['url'] ?? '';
$needle   = '/';
$pos = strpos($linkUrl, $needle);
if($pos === false){ // スラッシュを含まないURLは想定しないためURLなし
    $linkUrl = '';
}elseif($pos === 0){ // システム内の相対パスのためURL生成
    $linkUrl = url($linkUrl);
}

$target = 'js-clickitem';
if(isset($navItem['target']) && $navItem['target'] === '_blank'){
    $target = 'js-clickitemBlank blankIcon';
}

@endphp
<a class="navItem {{$navItem['class'] ?? ''}}"  href="{{$linkUrl}}">
    <div class="navItemFlex">
        <div class="{{$target}}">
            @if(isset($navItem['label']['top']))
            <span class="{{$navItem['label']['top']['class']??''}}">{!! nl2br($navItem['label']['top']['text']??'') !!}</span>
            @endif
            @if(isset($navItem['label']['bottom']))
            <span class="{{$navItem['label']['bottom']['class']??''}}">{{$navItem['label']['bottom']['text']??''}}</span>
            @endif
   
        </div>
    </div>
</a>
@endif


