@extends('layouts.home')
@push('css')
<head>
  <title>OFU - Blog</title>

  <!-- Favicons -->
  <link href="{{ asset('about_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('about_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

</head>
@endpush
@section('content')

    <div id="app" >
      <!--Blog Heading  -->
      <section id="title" >
        <div class="container">
			<div class="row ">
				<div class="col-md-6">
					<h1 class="mb-5">{{ $blog_data->blog_title }}</h1>
					<div class="profile d-flex ">
						<div>
							<img src="{{ asset('blog_assets/img/grey.png') }}" class="image mr-4 smaller-image" alt="grey-illustration">
						</div>
						<div>
							<p><span class= "black">by {{ $blog_data->author }}</span><br>
							<em>Updated: {{ \Carbon\Carbon::parse($blog_data->updated_at)->diffForHumans() }}</em></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('images/blog/'.$blog_data->img) }}" alt="{{ $blog_data->blog_title }}" class="image">
				</div>     
			</div>
		</div>	
	  </section>
	  


	<section class = "relative">
		<section id="icons">
			<div>
				<i class="fas fa-thumbs-up"><small class="mt-2"><br>286</small></i>
				<i class="fa fa-twitter"></i></li>
				<i class="fa fa-facebook"></i>
				<i class="fa fa-google-plus"></i>
				<i class="fa fa-linkedin"></i>
				<i class="far fa-comments"></i>
			</div>
		</section>

		<section id="content" class = "container">
			<p class="blog-content">
			{{ $blog_data->blog_post }}
			</p>

			<div class= "heading-number text-center">
				<span>1</span>
			</div>
				<h3 class="text-center">Get All Dramatic</h3>
				<div>
					<p class="blog-content">
						Anyone can get a job in a tropical paradise— Sell your stuff, quit your job, and move to Asia to start teaching English.
						It’s just that, unless you have a firm plan, you’ll probably come back beaten after a few months, only to hear all your friends’ patronizing pep talks about how you almost made it work.
					</p>
				</div>
				<div class= "heading-number mt-5 text-center">
				<span>2</span>
				</div>
				<h3 class="text-center">Get All Dramatic</h3>
				<div>
					<p class="blog-content">
						Anyone can get a job in a tropical paradise— Sell your stuff, quit your job, and move to Asia to start teaching English.
						It’s just that, unless you have a firm plan, you’ll probably come back beaten after a few months, only to hear all your friends’ patronizing pep talks about how you almost made it work.
					</p>
				</div>				
		</section>
		<!-- Featured Blogs -->
		@include('partials.subscribe')
	</section>

	<!-- Latest Blogs -->
	<section id="latest" class= "container">
			<div class="container">
			<h2 class="text-center my-5">Other Articles</h2>
			<div class="row">
			<div class="col-md-4">
				<div class="card mb-3">
					<img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog1->img) }}" alt="{{ $blog1->blog_title }}">
					<div class="card-body">
						<span class="topic">{{ $blog1->category }}</span>
						<h3 class="card-title my-3">{{ $blog1->blog_title }}</h3>
						<p>{{ \Illuminate\Support\Str::limit($blog1->blog_post, 150, $end='...') }}</p>
						<div class="flex">
							<p class="author"><i>by <strong>{{ $blog1->author }}</strong></i></p>
							<span class="date">{{ \Carbon\Carbon::parse($blog1->updated_at)->diffForHumans() }}</span>
						</div>
					</div>
				</div>
        	</div>
			<div class="col-md-4">
				<div class="card mb-3">
					<img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog2->img) }}" alt="{{ $blog2->blog_title }}">
					<div class="card-body">
						<span class="topic">{{ $blog2->category }}</span>
						<h3 class="card-title my-3">{{ $blog2->blog_title }}</h3>
						<p>{{ \Illuminate\Support\Str::limit($blog2->blog_post, 150, $end='...') }}</p>
						<div class="flex">
							<p class="author"><i>by <strong>{{ $blog2->author }}</strong></i></p>
							<span class="date">{{ \Carbon\Carbon::parse($blog2->updated_at)->diffForHumans() }}</span>
						</div>
					</div>
				</div>
        	</div>
			<div class="col-md-4">
				<div class="card mb-3">
					<img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog3->img) }}" alt="{{ $blog3->blog_title }}">
					<div class="card-body">
						<span class="topic">{{ $blog3->category }}</span>
						<h3 class="card-title my-3">{{ $blog3->blog_title }}</h3>
						<p>{{ \Illuminate\Support\Str::limit($blog3->blog_post, 150, $end='...') }}</p>
						<div class="flex">
							<p class="author"><i>by <strong>{{ $blog3->author }}</strong></i></p>
							<span class="date">{{ \Carbon\Carbon::parse($blog3->updated_at)->diffForHumans() }}</span>
						</div>
					</div>
				</div>
        	</div>
			</div>
			</div>
	</section>

    </div>

@section('js')
    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src= "{{asset('js/nav.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
</body>

</html>
