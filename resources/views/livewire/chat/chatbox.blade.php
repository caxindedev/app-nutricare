<div class="bg-blue-400">
    {{-- Stop trying to control. --}}
    @if ($selectedConversation)
        <div class="position-relative" id="users-chat" style="display: block;">
            <div class="p-3 user-chat-topbar">
                <div class="row align-items-center">
                    <div class="col-sm-4 col-8">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i
                                        class="ri-arrow-left-s-line align-bottom"></i></a>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                        <img src="{{ 'https://ui-avatars.com/api/?name=' . $receiverInstance->name }}"
                                            class="rounded-circle avatar-xs" alt="{{ $receiverInstance->name }}">
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username"
                                                data-bs-toggle="offcanvas" href="#userProfileCanvasExample"
                                                aria-controls="userProfileCanvasExample">{{ $receiverInstance->name }}</a>
                                        </h5>
                                        <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>Online</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 col-4">
                        <ul class="list-inline user-chat-nav text-end mb-0">
                            <li class="list-inline-item m-0">
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search icon-sm">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                        <div class="p-2">
                                            <div class="search-box">
                                                <input type="text" class="form-control bg-light border-light"
                                                    placeholder="procure..." onkeyup="searchMessages()"
                                                    id="searchMessage">
                                                <i class="ri-search-2-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item d-none d-lg-inline-block m-0">
                                <button type="button" class="btn btn-ghost-secondary btn-icon"
                                    data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample"
                                    aria-controls="userProfileCanvasExample">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-info icon-sm">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="16" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    </svg>
                                </button>
                            </li>

                            <li class="list-inline-item m-0">
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical icon-sm">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item d-block d-lg-none user-profile-show" href="#"><i
                                                class="ri-user-2-fill align-bottom text-muted me-2"></i>Perfil</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-inbox-archive-line align-bottom text-muted me-2"></i>
                                            Archive</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-mic-off-line align-bottom text-muted me-2"></i> Muted</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- end chat user head -->
            <div class="chat-conversation p-3 p-lg-4 simplebar-scrollable-y" id="chat-conversation"
                data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: -24px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                                <div class="simplebar-content" style="padding: 24px;">

                                    <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                                        {{-- as mensagens --}}
                                        @foreach ($messages as $message)
                                            <li class="chat-lista {{ Auth::user()->id == $message->sender_id ? 'right' : 'left' }} "
                                                id="{{ $message->id }}">
                                                <div class="conversation-list">
                                                    @if (Auth::user()->id != $message->sender_id)
                                                        <div class="chat-avatar">
                                                            <img src="{{ 'https://ui-avatars.com/api/?name=' . $receiverInstance->name }}"
                                                                alt="{{ $receiverInstance->name }}" style="width: 100px; height=100px;" >
                                                        </div>
                                                    @endif
                                                    <div class="user-chat-content">
                                                        <div class="ctext-wrap">
                                                            {{-- imagem --}}
                                                            @if ($message->arquivo)
                                                            
                                                                <div class="message-img mb-0">
                                                                    <div class="message-img-list">
                                                                        <div> 
                                                                            <a class="popup-img d-inline-block"
                                                                                href="{{ asset("storage/{$message->arquivo}")}}">
                                                                                <img src="{{ asset("storage/{$message->arquivo}")}}"
                                                                                    alt="" class="rounded border">
                                                                            </a> 
                                                                        </div>
                                                                        @if (Auth::user()->id == $message->sender_id)
                                                                            <div class="message-img-link">
                                                                                <ul class="list-inline mb-0">
                                                                                    <li class="list-inline-item dropdown"> <a
                                                                                            class="dropdown-toggle"
                                                                                            href="#" role="button"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"> 
                                                                                            <i class="ri-more-fill"></i> 
                                                                                        </a>
                                                                                        <div class="dropdown-menu"
                                                                                            style=""> 
                                                                                            <a class="dropdown-item"
                                                                                                href="assets/images/small/img-1.jpg"
                                                                                                download=""><i
                                                                                                    class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>
                                                                                            <a class="dropdown-item"
                                                                                                href="#"><i
                                                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                            <a class="dropdown-item"
                                                                                                href="#"><i
                                                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                            <a class="dropdown-item"
                                                                                                href="#"><i
                                                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                            <a class="dropdown-item delete-image"
                                                                                                href="#"><i
                                                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            {{-- fim das imagem --}}
                                                            <div class="ctext-wrap-content"
                                                                id="{{ $message->id * 2 }}">
                                                                <p class="mb-0 ctext-content">
                                                                    {{ $message->body }}
                                                                </p>
                                                            </div>
                                                            <div class="dropdown align-self-start message-box-drop">
                                                                <a class="dropdown-toggle" href="#"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item copy-message"
                                                                        href="#">
                                                                        <i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                        @if ((Auth::user()->id == $message->sender_id) || Auth::user()->isNutricionista() )
                                                                            <a class="dropdown-item delete-item" wire:click.prevent="destroy({{$message}})" href="#">
                                                                                <i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete
                                                                            </a>
                                                                        @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name">
                                                            <span
                                                                class="d-none name">{{ $receiverInstance->name }}</span>
                                                            <small
                                                                class="text-muted time">{{ $message->created_at->format('m: i a') }}</small>
                                                            @php
                                                                if ($message->user->id === auth()->id()) {
                                                                    if ($message->read == 0) {
                                                                        echo '<span class="text-success check-message-icon">';
                                                                        echo '<i class="bx bx-check-double"></i> ';
                                                                        echo '</span>';
                                                                    } else {
                                                                        echo '<span class="check-message-icon">';
                                                                        echo '<i class="bx bx-check"></i>';
                                                                        echo '</span>';
                                                                    }
                                                                }
                                                            @endphp
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                        {{-- <li class="chat-list left" id="1">
                                            <div class="conversation-list">
                                                <div class="chat-avatar"><img src="assets/images/users/avatar-2.jpg"
                                                        alt="">
                                                    </div>
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content" id="1">
                                                            <p class="mb-0 ctext-content">Good morning 😊</p>
                                                        </div>
                                                        <div class="dropdown align-self-start message-box-drop"> <a
                                                                class="dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"> <i class="ri-more-2-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu"> <a
                                                                    class="dropdown-item reply-message"
                                                                    href="#"><i
                                                                        class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                <a class="dropdown-item copy-message"
                                                                    href="#"><i
                                                                        class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                <a class="dropdown-item delete-item" href="#"><i
                                                                        class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name"><span class="d-none name">Lisa
                                                            Parker</span><small class="text-muted time">09:07
                                                            am</small> <span class="text-success check-message-icon"><i
                                                                class="bx bx-check-double"></i></span></div>
                                                </div>
                                            </div>
                                        </li> --}}
                                        {{-- fim das mensagens --}}
                                    </ul>
                                    <!-- end chat-conversation-list -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: 706px; height: 58px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                    <div class="simplebar-scrollbar"
                        style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
            </div>
            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoard"
                role="alert">
                Message copied
            </div>
        </div>
        {{-- separaçao --}}


        <script>
            $(".chatbox_body").on('scroll', function() {
                // alert('aahsd');
                var top = $('.chatbox_body').scrollTop();
                //   alert('aasd');
                if (top == 0) {

                    window.livewire.emit('loadmore');
                }

            });
        </script>


        <script>
            window.addEventListener('updatedHeight', event => {

                let old = event.detail.height;
                let newHeight = $('.chatbox_body')[0].scrollHeight;

                let height = $('.chatbox_body').scrollTop(newHeight - old);


                window.livewire.emit('updateHeight', {
                    height: height,
                });


            });
        </script>
    @else
        <div class="fs-4 text-center text-primary mt-5 capitalize">
            Não iniciaste nenhuma conversa
        </div>
    @endif


    <script>
        window.addEventListener('rowChatToBottom', event => {
            $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);
        });
    </script>

    <script>
        $(document).on('click', '.return', function() {
            window.livewire.emit('resetComponent');
        });
    </script>

    <script>
        window.addEventListener('markMessageAsRead', event => {
            var value = document.querySelectorAll('.status_tick');
            value.array.forEach(element, index => {
                element.classList.remove('bi bi-check2');
                element.classList.add('bi bi-check2-all', 'text-primary');
            });

        });
    </script>
</div>
