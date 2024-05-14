<div class="bg-green-400">
    {{-- The whole world belongs to you. --}}

    @if ($selectedConversation)
        <div class="chat-input-section p-3 p-lg-4">

            @if ($this->arquivo)
                <!-- Dark Alert -->
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <p>
                        <img src="{{ $arquivo->temporaryUrl() }}" width="200" class="img-thumbnail">
                    </p>
                    <button wire:click="$set('arquivo', '')" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form wire:submit.prevent='sendMessage' id="chatinput-form" enctype="multipart/form-data">
                <div class="row g-0 align-items-center">
                    <div class="col-auto">
                        <div class="chat-input-links me-2">
                            <div class="links-list-item">
                                <input type="file" id="arquivo" wire:model="arquivo" style="display: none;">
                                <label for="arquivo" class="btn btn-link text-decoration-none emoji-btn"
                                    id="emoji-btn">
                                    <i class="bx  ri-attachment-2 align-middle"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="chat-input-feedback">
                            Please Enter a Message
                        </div>
                        <input type="text" wire:model='body' class="form-control chat-input bg-light border-light"
                            id="chat-input" placeholder="Type your message..." autocomplete="off">
                    </div>
                    <div class="col-auto">
                        <div class="chat-input-links ms-2">
                            <div class="links-list-item">
                                <button type="submit" class="btn btn-info chat-send waves-effect waves-light">
                                    <i class="ri-send-plane-2-fill align-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    @endif
    <script>
        document.getElementById('arquivo').addEventListener('change', function(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.querySelector('img');
                output.src = dataURL;
            };

            reader.readAsDataURL(input.files[0]);
        });
    </script>
</div>
