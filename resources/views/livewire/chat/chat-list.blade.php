<div>
    <div class="px-4 pt-4 mb-3">
        <div class="d-flex align-items-start">
            <div class="flex-grow-1">
                <img class="rounded-circle img-fluid userprofile"
                    src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ auth()->user()->name }}"
                    alt="{{ auth()->user()->name }}">
                <h5 class="mb-4">Chats</h5>
            </div>
            <div class="flex-shrink-0">
                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" aria-label="Add Contact"
                    data-bs-original-title="Add Contact">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-soft-info btn-sm">
                        <i class="ri-add-line align-bottom"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="search-box">
            <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
            <i class="ri-search-2-line search-icon"></i>
        </div>

    </div>


    <div class="chatlist_body ">
        <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab" aria-selected="true">
                    Chats
                </a>
            </li>
            @if (!Auth::user()->isAluno())
                @if (!empty($turmas))
                    <li class="nav-item" role="presentation">
                        <a class="nav-link capitalize" data-bs-toggle="tab" href="#turmas" role="tab"
                            aria-selected="false" tabindex="-1">
                            turmas
                        </a>
                    </li>
                @endif
            @endif
            <li class="nav-item" role="presentation">
                <a class="nav-link capitalize" data-bs-toggle="tab" href="#todos" role="tab" aria-selected="false"
                    tabindex="-1">
                    {{!Auth::user()->isAluno()?"todos":"Nutricionista"}}
                </a>
            </li>
        </ul>
        <div class="tab-content text-muted">
            <div class="tab-pane active" id="chats" role="tabpanel">
                <div class="chat-room-list pt-3 simplebar-scrollable-y" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -16px 0px 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 16px 0px 0px;">
                                        <div class="d-flex align-items-center px-4 mb-2">
                                            <div class="flex-grow-1">
                                                <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-placement="bottom" aria-label="New Message"
                                                    data-bs-original-title="New Message">

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-soft-info btn-sm shadow-none">
                                                        <i class="ri-add-line align-bottom"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chat-message-list">
                                            <ul class="list-unstyled chat-list chat-user-list" id="userList">
                                                @if (count($conversations) > 0)
                                                    @foreach ($conversations as $conversation)
                                                        {{-- inicio --}}
                                                        <a wire:key='{{ $conversation->id }}'
                                                            wire:click="$emit('chatUserSelected', {{ $conversation }},{{ $this->getChatUserInstance($conversation, $name = 'id') }})"
                                                            href="javascript: void(0);" class="unread-msg-user">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs">
                                                                        <img src="https://ui-avatars.com/api/?name={{ $this->getChatUserInstance($conversation, $name = 'name') }}"
                                                                            class="rounded-circle img-fluid userprofile"
                                                                            alt="{{ $this->getChatUserInstance($conversation, $name = 'name') }}"><span
                                                                            class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-truncate mb-0">
                                                                        {{ $this->getChatUserInstance($conversation, $name = 'name') }}
                                                                    </p>
                                                                    <span
                                                                        class="text-muted time">{{ $conversation->messages->last()->body }}</span>
                                                                    -
                                                                    <span class="text-muted time">
                                                                        {{ $conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans() }}
                                                                    </span>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="badge bg-dark-subtle text-body rounded p-1">
                                                                        @php
                                                                            if (
                                                                                count(
                                                                                    $conversation->messages
                                                                                        ->where('read', 0)
                                                                                        ->where(
                                                                                            'receiver_id',
                                                                                            Auth()->user()->id,
                                                                                        ),
                                                                                )
                                                                            ) {
                                                                                echo ' <div class="unread_count badge rounded-pill text-light bg-danger">  ' .
                                                                                    count(
                                                                                        $conversation->messages
                                                                                            ->where('read', 0)
                                                                                            ->where(
                                                                                                'receiver_id',
                                                                                                Auth()->user()->id,
                                                                                            ),
                                                                                    ) .
                                                                                    '</div> ';
                                                                            }

                                                                        @endphp
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        {{-- fim --}}
                                                    @endforeach
                                                @else
                                                    Ainda não iniciaste nenhuma conversa.
                                                @endif


                                            </ul>
                                        </div>
                                        <!-- End chat-message-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 300px; height: 653px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 182px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="turmas" role="tabpanel">
                <div class="chat-room-list pt-3 simplebar-scrollable-y" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -16px 0px 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 16px 0px 0px;">
                                        <div class="d-flex align-items-center px-4 mb-2">
                                            <div class="flex-grow-1">
                                                <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-placement="bottom" aria-label="New Message"
                                                    data-bs-original-title="New Message">

                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-soft-info btn-sm shadow-none">
                                                        <i class="ri-add-line align-bottom"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chat-message-list">
                                            <ul class="list-unstyled chat-list chat-user-list mb-0" id="channelList">
                                                @foreach ($turmas as $turma)
                                                    <li id="contact-id-10" data-name="channel" class="active"> <a
                                                            href="javascript: void(0);" class="unread-msg-user">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs">
                                                                        <div
                                                                            class="avatar-title bg-light rounded-circle text-body">
                                                                            #</div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-truncate mb-0">{{ $turma->nome }}
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="flex-shrink-0 ms-2"><span
                                                                            class="badge bg-dark-subtle text-body rounded p-1">7</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- End chat-message-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 300px; height: 653px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 182px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="todos" role="tabpanel">
                <div class="chat-room-list pt-3 simplebar-scrollable-y" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -16px 0px 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 16px 0px 0px;">
                                        <div class="d-flex align-items-center px-4 mb-2">
                                            <div class="flex-grow-1">
                                                <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-placement="bottom" aria-label="New Message"
                                                    data-bs-original-title="New Message">

                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-soft-info btn-sm shadow-none">
                                                        <i class="ri-add-line align-bottom"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chat-message-list">
                                            <ul class="list-unstyled chat-list chat-user-list" id="userList">
                                                @foreach ($users as $user)
                                                    @if (Auth::user()->isNutricionista())
                                                        @if (@$user->isAluno())
                                                            <li id="{{ @$user->id }}" data-name="direct-message"
                                                                class="">
                                                                <a href="javascript: void(0);"
                                                                    wire:click='checkconversation({{ @$user->id }})'>
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs">
                                                                                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ @$user->name }}"
                                                                                    class="rounded-circle img-fluid userprofile"
                                                                                    alt="{{ @$user->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">
                                                                                {{ @$user->name }}</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endif
                                                    @if (Auth::user()->isAluno())
                                                        @if (@$user->isNutricionista())
                                                            <li id="{{ @$user->id }}" data-name="direct-message"
                                                                class="">
                                                                <a href="javascript: void(0);"
                                                                    wire:click='checkconversation({{ @$user->id }})'>
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs">
                                                                                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ @$user->name }}"
                                                                                    class="rounded-circle img-fluid userprofile"
                                                                                    alt="{{ @$user->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">
                                                                                {{ @$user->name }}</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- End chat-message-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 300px; height: 653px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 182px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
