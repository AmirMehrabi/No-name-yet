<reply :attributes="{{ $reply }}" inline-template>
    <div class="comment-section border-bottom mt-2">
        <div class="d-flex flex-row-reverse w-100 text-right">
            <div class="p-2 bd-highlight align-self-center">
                <img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="commenter-image rounded-circle"
                 alt="">
            </div>
            <div class="p-2 flex-fill bd-highlight mt-2">
                <div class="d-flex bd-highlight flex-row-reverse pb-3">
                    <div class="text-daneh font-weight-bold ml-auto">قورباغه‌ات را قورت بده</div>
                    <div class="flex-shrink-1 bd-highlight text-muted" v-text="created_at">
                        {{-- @if ($reply->created_at->diffInDays() > 7)
                        <p class="text-muted rtl m-0">{{
                            \Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::fromCarbon($reply->created_at)->format('%d
                            %B %Y'))}}</p>
                        @else
                        <p class="text-muted rtl m-0">{{
                            \Morilog\Jalali\CalendarUtils::convertNumbers($reply->created_at->diffForHumans()) }}</p>
                        @endif --}}
                    </div>
                </div>
                <p class="text-justify" v-text="body">
                </p>
                <div class="review-feedback text-left">
                        <favorite :data="{{$reply}}"></favorite>
                    <a href="" class="btn link-unstyled text-muted">۱۲ <i class="fa fa-reply"></i></a>
                    <a href="" class="btn link-unstyled text-muted">۱۲ <i class="far fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
</reply>