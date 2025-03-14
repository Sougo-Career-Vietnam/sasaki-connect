{{-- @if($arrayFEntJob)
    @foreach($arrayFEntJob as $fEntJob)
    <div class="latestJobItem swiper-slide">
        <a href="{{Route('top')}}/job/{{ $fEntJob->jobId ?? '' }}">
            <span class="latestJobDate">
                <x-atoms.date :date="$fEntJob->updatedAt" format="Y年m月d日" />
            </span><br>
            <span class="latestJobTag">
                @if($fEntJob->arrayFEntKinmuti)
                <x-search.kinmti :arrayKinmti="$fEntJob->arrayFEntKinmuti" /> /
                @endif
                {{$fEntJob->jobTitle}}
            </span>
        </a>
    </div>
    @endforeach
@endif --}}

@if($arrayFEntJob)
    @foreach($arrayFEntJob as $fEntJob)
    <div class="latestJobItem swiper-slide">
        <a href="{{ Route('top') }}/job/{{ $fEntJob->jobId ?? '' }}">
            <span class="latestJobDate">
                <x-atoms.date :date="$fEntJob->updatedAt" format="Y年m月d日" />
            </span><br>
            <span class="latestJobTag">
                @if($fEntJob->arrayFEntKinmuti)
                    <x-search.kinmti :arrayKinmti="$fEntJob->arrayFEntKinmuti" /> /
                @endif
                {{ Str::limit($fEntJob->jobTitle, 50, '...') }}
            </span>
        </a>
    </div>
    @endforeach
@endif
