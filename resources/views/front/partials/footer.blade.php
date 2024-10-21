<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Address<span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{$setting->address}}</p>
                <p><i class="fa fa-phone-alt me-3"></i>{{$setting->phone}}</p>
                <p><i class="fa fa-envelope me-3"></i>{{$setting->email}}</p>
                <div class="d-flex pt-2">
                @if(isset($setting->link['twitter']))
                    <a class="btn btn-outline-light btn-social" href="{{$setting->link['twitter']}}"><i class="fab fa-twitter" target="_blank"></i></a>
                @endif
                @if(isset($setting->link['facebook']))
                    <a class="btn btn-outline-light btn-social" href="{{$setting->link['facebook']}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                @endif
                @if(isset($setting->link['instagram']))
                    <a class="btn btn-outline-light btn-social" href="{{$setting->link['instagram']}}"><i class="fab fa-instagram" target="_blank"></i></a>
                @endif
                @if(isset($setting->link['linkedin']))
                    <a class="btn btn-outline-light btn-social" href="{{$setting->link['linkedin']}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                @endif
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                <div class="row g-2">
                    @foreach ($projects as $project)
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset('storage/'.$project->image)}}" alt="Image">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                @livewire('front.components.subscribers-component')
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        @include('front.partials.copyright')
    </div>
</div>


@section('js')

<script>
    
    document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('morph.updated', (el, component) => {
                
                let mySuccessAlert = document.querySelector('.my-success-alert');
                
                if(mySuccessAlert)
                {
                    setTimeout(() => {
                        mySuccessAlert.style.display = 'none';
                    }, 2000); // 2000 milliseconds = 2 seconds
                }
            });
        });

</script>
    
@endsection