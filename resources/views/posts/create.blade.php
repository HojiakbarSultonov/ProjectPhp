<x-layouts.main>
    <x-slot:title>
        Post yaratish
    </x-slot:title>

    <x-pageHeader>
        Post yaratish
    </x-pageHeader>



<!-- Contact Start -->


    <!-- Contact Start -->
    <div class="container py-5">
        <div class="w-50 py-4">
                    <div class="contact-form">
                        <div id="success"></div>
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <form  action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="control-group mb-4">
                                    <input type="text" class="form-control p-4" name="title" value="{{old('title')}}" id="name" placeholder="Title"  />
                                    @error('title')
                                    <p class="help-block text-danger">  {{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="control-group mb-4 ">
                                    <input type="file" class="form-control  p-4" name="photo" value="{{old('title')}}" id="name" placeholder="Title"  />
                                    @error('photo')
                                         <p class="help-block text-danger">  {{ $message }}</p>
                                    @enderror

                                </div>

                            <div class="control-group mb-4">
                                <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Tekst" >{{old('short_content')}}</textarea>
                                @error('short_content')
                                <p class="help-block text-danger">  {{ $message }}</p>
                                @enderror
                            </div>  <div class="control-group mb-4">
                                <textarea class="form-control p-4" rows="6" name="content"  placeholder="Ma'qola" >{{old('content')}}</textarea>
                                  @error('content')
                                <p class="help-block text-danger">  {{ $message }}</p>
                                 @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

    <!-- Contact End -->
<!-- Contact End -->
</x-layouts.main>

