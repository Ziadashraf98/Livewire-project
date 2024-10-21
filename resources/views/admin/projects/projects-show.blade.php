<x-show-modal title="Show Project">

    <p>Name: <span class="text-primary">{{$name}}</span></p>
    <p>Description: <span class="text-primary">{{$description}}</span></p>
    <p>Link: <a href="{{$link}}" target="_blank">{{$link}}</a></p>
    <p>Category: <span class="text-primary">{{$category}}</span></p>
    <p>Image: <span><a href="{{asset('storage/'.$image)}}" data-lightbox="portfolio"><img class="card-img card-img-left mx-2" style="width: 20%" src="{{asset('storage/'.$image)}}"></a></span></p>
       
</x-show-modal>