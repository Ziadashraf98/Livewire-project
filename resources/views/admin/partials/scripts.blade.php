<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('admin-assets')}}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset('admin-assets')}}/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('admin-assets')}}/vendor/js/bootstrap.js"></script>
    <script src="{{asset('admin-assets')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{asset('admin-assets')}}/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('admin-assets')}}/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{asset('admin-assets')}}/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{asset('admin-assets')}}/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    
    {{-- Javascript Hooks in Livewire --}}
    
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

        window.addEventListener('createModalToggle' , event => {
            
            setTimeout(() => {
                $('#createModal').modal('toggle');
            }, 1000); // 1000 milliseconds = 1 seconds
        })
       
        window.addEventListener('editModalToggle' , event => {
            
            setTimeout(() => {
                $('#editModal').modal('toggle');
            }, 1000);
        })
        
        window.addEventListener('deleteModalToggle' , event => {
            
            setTimeout(() => {
                $('#deleteModal').modal('toggle');
            }, 1000); 
        })
    
    </script>

    @yield('js')

    
    {{-- <script>
        document.addEventListener('livewire:init', function () {
            // Listen for the event and hide the modal
            Livewire.on('createModalToggle', () => {
                // Assuming Bootstrap modal is used, hide it
                $('#createModal').modal('hide');
            });
        });
    </script> --}}

    
    {{-- <script>
        document.querySelector('#myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission for demo purposes

            // Simulate form submission success
            setTimeout(function() {
                // Show success message
                const successMessage = document.querySelector('.my-success-alert');
                successMessage.style.display = 'block';

                // Hide the message after 2 seconds
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 2000); // 2000 milliseconds = 2 seconds
            }, 500); // Simulate slight delay in form processing
        });
    </script> --}}
