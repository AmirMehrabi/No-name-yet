@extends('layouts.master')



@include('partial.main-nav')

@section('header-assets')

@endsection

@section('content')

<div class="container">
	<div class="row justify-content-center mt-5">

		<div class="col-md-12">
			<div class="row">
				<div class="d-flex w-100  flex-row-reverse">
					<div class="p-2 bd-highlight w-25">
						@if ($review->image_src)
						<img src="{{URL::asset($review->image_src)}}" class="w-100 img-responsive rounded" alt="">
						@else
						<img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100 img-responsive rounded"
						 alt="">
						@endif
						<div class="dropdown">
							<button class="btn btn-success rtl btn-lg btn-block mt-1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
							 aria-haspopup="true" aria-expanded="false">
								اضافه کردن به لیست
							</button>
							@if (Auth::user())
							<button class="btn btn-light btn-lg border-0 btn-block mt-1  trigger">
								نقد این کتاب
							</button>
							@endif



							<div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">خوانده شده</a>
								<a class="dropdown-item" href="#">در حال خواندن</a>
								<a class="dropdown-item" href="#">می‌خواهم بخوانم</a>
								<a class="dropdown-item" href="#">ناتمام</a>
							</div>
						</div>
					</div>
					<div class="p-2 bd-highlight  flex-grow-1 w-75">
						<div class="d-flex flex-row-reverse">
							<div class="d-flex align-self-center">
								<h1 class="h5 font-weight-bold text-right color-daneh ml-4 mb-0">{{$review->book->title}}</h1>
							</div>
							<div class="d-flex align-self-center">
								<h3 class="h6 text-right text-dark align-self-center mb-0">{{$review->owner->name}}</h3>
								<img class="  rounded-circle mx-1" style="width: 35px; height: 35px;" src="{{$review->owner->avatar}}" alt="">

							</div>
							<div class="d-flex align-self-center mr-auto">
								@if ($review->created_at->diffInDays() > 7)
								<p class="text-muted rtl m-0">{{
									\Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::fromCarbon($review->created_at)->format('%d
									%B %Y'))}}</p>
								@else
								<p class="text-muted rtl m-0">{{
									\Morilog\Jalali\CalendarUtils::convertNumbers($review->created_at->diffForHumans()) }}</p>
								@endif
							</div>

						</div>
						<hr>
						<div class="review-body text-right">
							<p class="text-justify">{{$review->body}}</p>
							<p class="text-justify">{{$review->body}}</p>
							<p class="text-justify">{{$review->body}}</p>
							<div class="review-feedback text-left">
								<a href="" class="btn link-unstyled text-muted">۱۲ <i class="fa fa-reply"></i></a>
								<a href="" class="btn link-unstyled text-muted">۱۲ <i class="far fa-heart"></i></a>
							</div>

							<hr>
						</div>

						<div class="review-comments">
							<div class="d-flex bd-highlight flex-row-reverse w-100 align-items-center  ">
								<div class="p-2 bd-highlight">
									<h2 class="h5 text-daneh font-weight-bold text-right mb-0">نظرهای این نقد</h2>
								</div>
								<div class="p-2 bd-highlight mr-auto">
									<h2 class="d-inline h6 font-weight-bold  rtl text-dark d-flex align-items-center mb-0 pl-3">بر اساس:</h2>
								</div>
								<div class="p-2 bd-highlight">
									<div class="btn-group dropdown">
										<button type="button" class="btn btn-light dropdown-toggle rounded" data-toggle="dropdown" aria-haspopup="true"
										 aria-expanded="false">
											جدیدترین
										</button>
										<div class="dropdown-menu dropdown-menu-right text-right w-50">
											<button class="dropdown-item" type="button">پر بازدیدترین</button>
											<button class="dropdown-item" type="button">قدیمی ترین</button>
											<button class="dropdown-item" type="button">اول دوستان</button>
										</div>
									</div>
								</div>
							</div>

							<div class="comment-section border-bottom mt-2">
								<div class="d-flex flex-row-reverse w-100 text-right">
									<div class="p-2 bd-highlight align-self-center">
										<img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="commenter-image rounded-circle"
										 alt="">
									</div>
									<div class="p-2 flex-fill bd-highlight mt-2">
										<div class="d-flex bd-highlight flex-row-reverse pb-3">
											<div class="text-daneh font-weight-bold ml-auto">قورباغه‌ات را قورت بده</div>
											<div class="flex-shrink-1 bd-highlight text-muted">۴ ماه پیش</div>
										</div>
										<p class="text-justify">به یاد داشته باشید که کار شما باید با نقد شما به پایان برسد. بنابراین به پاراگراف های آغازین برگردید. قضاوت شما درباره سبک، چاچوب، محتوا و ارزش‌های کتاب چیست؟ آیا هدف نویسنده از نوشتن کتاب آشکار است؟</p>
										<div class="review-feedback text-left">
											<a href="" class="btn link-unstyled text-muted">۱۲ <i class="fa fa-reply"></i></a>
											<a href="" class="btn link-unstyled text-muted">۱۲ <i class="far fa-heart"></i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="comment-section border-bottom">
								<div class="d-flex flex-row-reverse w-100 text-right">
									<div class="p-2 bd-highlight align-self-center">
										<img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="commenter-image rounded-circle"
										 alt="">
									</div>
									<div class="p-2 flex-fill bd-highlight mt-2">
										<div class="d-flex bd-highlight flex-row-reverse pb-3">
											<div class="text-daneh font-weight-bold ml-auto">قورباغه‌ات را قورت بده</div>
											<div class="flex-shrink-1 bd-highlight text-muted">۴ ماه پیش</div>
										</div>
										<p class="text-justify">به یاد داشته باشید که کار شما باید با نقد شما به پایان برسد. بنابراین به پاراگراف های آغازین برگردید. قضاوت شما درباره سبک، چاچوب، محتوا و ارزش‌های کتاب چیست؟ آیا هدف نویسنده از نوشتن کتاب آشکار است؟این یک نظر بسیار خوب برای نقد زیبای شما
											میباشد چرا که بسیار لذت بردم و دوست داشتم و خوشم آمد.</p>
										<div class="review-feedback text-left">
											<a href="" class="btn link-unstyled text-muted">۱۲ <i class="fa fa-reply"></i></a>
											<a href="" class="btn link-unstyled text-muted">۱۲ <i class="far fa-heart"></i></a>
										</div>
									</div>
								</div>
							</div>




							<div class="insert-comment border-bottom">
								<div class="d-flex flex-row-reverse w-100 text-right">
									<div class="p-2 bd-highlight align-self-start mt-3">
										<img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="commenter-image rounded-circle"
										 alt="">
									</div>
									<div class="p-2 flex-fill bd-highlight mt-2">
										<div class="form-group">
											<label for=""></label>
											<textarea name="" id="" class="form-control w-100 rtl" cols="30" rows="4" placeholder="نظر خود راجع به این نقد را بنویسید"></textarea>
											{{-- <small id="helpId" class="text-muted">Help text</small> --}}

										</div>
										<button type="submit" class="btn btn-sm btn-success float-left">ثبت نظر</button>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

		</div>

	</div>

	<div class="row justify-content-center">
		<div class="col-md-12">
			<hr>
			<h2 class="h5 text-daneh font-weight-bold text-right">دیگر نقدهای نوشته شده توسط {{$review->owner->name}}</h2>
			<div class="d-flex flex-row-reverse w-100 text-right other-reviews">
				<div class="p-2 bd-highlight w-10">
					<img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100 rounded"
					 alt="">
				</div>
				<div class="p-2 flex-fill bd-highlight mt-2 w-90">
					<div class="d-flex bd-highlight flex-row-reverse pb-3">
						<div class="text-daneh font-weight-bold ml-auto">قورباغه‌ات را قورت بده</div>
						<div class="flex-shrink-1 bd-highlight text-muted">۴ ماه پیش</div>
					</div>
					<p class="text-justify">کتاب، شما را راضی کرد؟ چرا بله و چرا خیر؟ آیا دلایل و مستندات نویسنده در خدمت نتیجه‌گیری او هست؟ آیا کتاب، اندیشه شما را به چالش طلبیده است یا دانش شما را بالا برده است؟ آیا پرسش تازه‌ای برایتان ایجاد کرده است؟ یا اینکه نویسنده صرفا آنچه را که شما می دانسته‌اید، به شکل دیگری عرضه کرده است؟ آیا خوندن این کتاب را به دیگران توصیه می‌کنید؟ به چه کسانی؟ آیا کتاب دیگری هم باید در همان باره نوشته شود؟</p>
				</div>
			</div>
			<div class="d-flex flex-row-reverse w-100 text-right other-reviews">
				<div class="p-2 bd-highlight w-10">
					<img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100 rounded"
					 alt="">
				</div>
				<div class="p-2 flex-fill bd-highlight mt-2 w-90">
					<div class="d-flex bd-highlight flex-row-reverse pb-3">
						<div class="text-daneh font-weight-bold ml-auto">قورباغه‌ات را قورت بده</div>
						<div class="flex-shrink-1 bd-highlight text-muted">۴ ماه پیش</div>
					</div>
					<p class="text-justify">کتاب، شما را راضی کرد؟ چرا بله و چرا خیر؟ آیا دلایل و مستندات نویسنده در خدمت نتیجه‌گیری او هست؟ آیا کتاب، اندیشه شما را به چالش طلبیده است یا دانش شما را بالا برده است؟ آیا پرسش تازه‌ای برایتان ایجاد کرده است؟ یا اینکه نویسنده صرفا آنچه را که شما می دانسته‌اید، به شکل دیگری عرضه کرده است؟ آیا خوندن این کتاب را به دیگران توصیه می‌کنید؟ به چه کسانی؟ آیا کتاب دیگری هم باید در همان باره نوشته شود؟</p>
				</div>
			</div>
			<div class="d-flex flex-row-reverse w-100 text-right other-reviews">
				<div class="p-2 bd-highlight w-10">
					<img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100 rounded"
					 alt="">
				</div>
				<div class="p-2 flex-fill bd-highlight mt-2 w-90">
					<div class="d-flex bd-highlight flex-row-reverse pb-3">
						<div class="text-daneh font-weight-bold ml-auto">قورباغه‌ات را قورت بده</div>
						<div class="flex-shrink-1 bd-highlight text-muted">۴ ماه پیش</div>
					</div>
					<p class="text-justify">کتاب، شما را راضی کرد؟ چرا بله و چرا خیر؟ آیا دلایل و مستندات نویسنده در خدمت نتیجه‌گیری او هست؟ آیا کتاب، اندیشه شما را به چالش طلبیده است یا دانش شما را بالا برده است؟ آیا پرسش تازه‌ای برایتان ایجاد کرده است؟ یا اینکه نویسنده صرفا آنچه را که شما می دانسته‌اید، به شکل دیگری عرضه کرده است؟ آیا خوندن این کتاب را به دیگران توصیه می‌کنید؟ به چه کسانی؟ آیا کتاب دیگری هم باید در همان باره نوشته شود؟</p>
				</div>
			</div>
		</div>
	</div>
</div>

<br><br>


<div class="bg-white border-bottom-0 rounded-top slider p-3 slider close">
	<button title="Close" class="btn btn-sm exit" type="button"><i class=" fas fa-times"></i></button>
	<hr>
	{!! Form::open(['route' => 'review.store', 'method' => 'post']) !!}

	<fieldset class="form-group text-right">
		<label for="exampleTextarea">نقد خود را بنویسید</label>
		<textarea name="body" class="form-control" id="exampleTextarea" rows="5"></textarea>
		{!! Form::hidden('book_id', $review->id) !!}
	</fieldset>

	<button type="submit" class="btn btn-primary">ثبت نقد</button>
	{!! Form::close() !!}
</div>
@endsection

@section('footer-assets')





<script type="text/javascript">
	$('.trigger, .exit').click(function () {
		$('.slider').toggleClass('close');
	});
</script>
@endsection