<?php

use Livewire\Component;

new class extends Component {
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
};
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p>Basic component livewire</p>
                    <div>
                        <h1>{{ $count }}</h1>

                        <button wire:click="increment" class="btn btn-primary">+</button>

                        <button wire:click="decrement" class="btn btn-danger">-</button>
                        <br />
                        <hr>
                        <p>Example of boostrap modal</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="mt-3 btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Alpine -->
                        <p>Example of alpineJs</p>
                        <div class="mt-3" x-data="{ open: false }">
                            <button class="btn btn-primary" @click=" open = !open ">Toggle</button>
                            <div class="mt-3 alert alert-info" x-show="open">Hello from Alpine</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
