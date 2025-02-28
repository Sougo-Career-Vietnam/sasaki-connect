@if($arrayFEntJob)
    @foreach($arrayFEntJob as $fEntJob)
    <div class="swiper-slide">
        <a class="" href="{{Route('top')}}/job/{{ $fEntJob->jobId ?? '' }}">
            <div class="recommendJobCols">
                <span class="koyktyName indicator{{$fEntJob->koyKeitaiCode}}">{{$fEntJob->koyKeitaiName}}</span>
                <figure class="recommendJobImg">
                    @if($fEntJob->mainGazoFilePath)
                        <img src="{{asset('storage'.$fEntJob->mainGazoFilePath)}}" alt="{{$fEntJob->jobTitle}}">
                    @else
                        <img src="{{asset('images/noPhoto.png')}}" alt="">
                    @endif
                </figure>
                <div class="recommendJobInfo">
                   
                    <p class="jobTitle">{{ \Illuminate\Support\Str::limit($fEntJob->jobTitle, 27, '...') }}</p>
                    <p class="jobArea"><x-search.kinmti :arrayKinmti="$fEntJob->arrayFEntKinmuti" /></p>
                    <p class="jobSyksy">{{ \Illuminate\Support\Str::limit($fEntJob->jobCategoryName, 27, '...') }}</p>
                    <p class="jobMoney">
                        @if($fEntJob->kyuyoKbnName && $fEntJob->kyuyoMin)
                            【{{$fEntJob->kyuyoKbnName}}】
                            <x-atoms.salary :kyuyoKbnCode="$fEntJob->kyuyoKbnCode" :kyuyoMin="$fEntJob->kyuyoMin" :kyuyoMax="$fEntJob->kyuyoMax" dispType="char" />
                        @endif
                    </p>
                    <p class="jobTime">{{ \Illuminate\Support\Str::limit($fEntJob->workingTimes, 25, '...') }}</p>
                </div>
                <div class="recommendJobInfoAdd">
                    <p class="letter">詳しく見る</p>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="recommendLinkBtn"></div>
            </div>
        </a>
    </div>
    @endforeach
@endif
