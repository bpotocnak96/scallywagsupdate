@extends('layouts/main')

@section('css')
	<link rel='stylesheet' href="{{ asset('css/forum.css') }}">
@endsection

@section('content')
	<div class="container p-3">
        <h2>Forums</h2>
        <p class="text-secondary small">The community forums is a place to discuss anything. Remember to be nice and have fun.</p>
		<div class="row">
			<div class="col-9">
				@forelse ($pinned_threads as $thread)
					@include('threads.panel')
                @empty
                    {{-- No pinned threads --}}
                @endforelse

                @forelse ($threads as $thread)
                    @continue( $pinned_threads->where('id', $thread->id)->count() > 0 )
					@include('threads.panel')
				@empty
					<br><hr>
					<h3 class='text-center'>Nothin' to see here folks</h3>
					<hr>
				@endforelse
				{{ $threads->links() }}
			</div>

			<div class="col-3">
				@include('particals/sidebar')
			</div>
		</div>


	</div>
@endsection

@section('javascript')
	<script src='{{ asset("js/forum.js") }}'></script>
@endsection
