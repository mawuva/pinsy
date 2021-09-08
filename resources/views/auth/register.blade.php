<x-layouts.master title="{{ __('pages.register.name') }}" description="{{ __('pages.register.description') }}" section="">

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-">
                <div class="card card-body">
                    <form method="post" action="{{ route('auth.register') }}">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.master>