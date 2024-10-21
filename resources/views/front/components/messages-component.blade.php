<form wire:submit='submit'>
    @include('admin.alert-message' , ['style'=>'success'])
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" wire:model='name' id="name" placeholder="Your Name">
                @include('admin.error' , ['field'=>'name'])
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" wire:model='email' id="email" placeholder="Your Email">
                @include('admin.error' , ['field'=>'email'])
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" wire:model='subject' id="subject" placeholder="Subject">
                @include('admin.error' , ['field'=>'subject'])
                <label for="subject">Subject</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" wire:model='message' id="message" style="height: 150px"></textarea>
                @include('admin.error' , ['field'=>'message'])
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3">Send Message</button>
        </div>
    </div>
</form>