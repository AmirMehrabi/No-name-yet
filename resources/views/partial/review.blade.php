<review :attributes="{{ $review }}" inline-template v-cloak>
        <div class="review text-right my-2 w-100 mb-3 border-bottom pb-2">
            <div class="d-flex flex-row align-items-center">
                <div class="mr-auto py-2 bd-highlight">
                  @if ($review->created_at->diffInDays() > 7)
                  <p class="text-muted rtl m-0">{{ \Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::fromCarbon($review->created_at)->format('%d %B %Y'))}}</p>
                  @else
                  <p class="text-muted rtl m-0">{{ \Morilog\Jalali\CalendarUtils::convertNumbers($review->created_at->diffForHumans()) }}</p>
                  @endif
                </div>
                <div class=" p-2 bd-highlight">
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                </div>
                <div class="py-2 bd-highlight order-2">
                  <img src="{{$review->owner->avatar}}" class="review-profile-pic img-rounded img-fluid rounded-circle" />
                </div>

                <div class="p-2 bd-highlight order-1">
                  <p class="mb-0">
                    <a class="text-muted" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$review->owner->name}}</strong> </a>
                  </p>
                </div>

              </div>

              <div class="review-description text-justify">
                        
              <div v-if="editing">
                  <textarea class="form-control" name="" id="" cols="30" rows="10" v-model="body"></textarea>

                  <div class="text-left">
                      <button class="btn btn-sm btn-outline-primary" @click="update">به روز رسانی</button>
                      <button class="btn btn-sm btn-link" @click="editing = false">انصراف</button>
                  </div>
              </div>
              <div v-else v-text="body" class="text-right py-2">

                </div>
                </div>



              <div class="card-footer d-flex flex-row bd-highlight">
                  <div class=" bd-highlight mr-3">
                      <button type="submit" class="btn btn-sm text-muted" @click="editing=true">ویرایش</button>
                    </div>
                <div class=" bd-highlight mr-3">
                  <a class="btn btn-sm text-muted" data-toggle="collapse" href="#collapseComments-{{$review->id}}" role="button" aria-expanded="false" aria-controls="collapseComments-{{$review->id}}"> ۱۲ <i class="fa fa-reply"></i></a>

                </div>

                <div class=" bd-highlight">
                  <favorite :data="{{$review}}"></favorite>
                  {{-- <form method="POST" action="/reviews/{{$review->id}}/favorites">
                    {!! csrf_field() !!}
                  </form> --}}

                </div>
              </div>

              <div class="collapse" id="collapseComments-{{$review->id}}">
                <div class="card card-body text-right rtl text-dark">
                  بقیه اطلاعات کتاب در این قسمت به کاربر نشان داده می‌شود.
                </div>
              </div>
        </div>
      </review>