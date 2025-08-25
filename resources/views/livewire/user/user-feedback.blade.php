<div>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                    {{ __('messages.t_feedback_for') }} {{ $user->name }}
                </h1>
                <p class="text-gray-600 dark:text-gray-400 mt-2">
                    {{ __('messages.t_viewing_feedback') }}
                </p>
            </div>

            @if ($feedbacks->count() > 0)
                <div class="space-y-6">
                    @foreach ($feedbacks as $feedback)
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        @if ($feedback->buyer->profile_photo_url)
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{ $feedback->buyer->profile_photo_url }}"
                                                alt="{{ $feedback->buyer->name }}">
                                        @else
                                            <div
                                                class="h-10 w-10 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center">
                                                <span
                                                    class="text-gray-600 dark:text-gray-400 font-medium">{{ substr($feedback->buyer->name, 0, 1) }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                            {{ $feedback->buyer->name }}
                                        </h3>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ $feedback->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if ($feedback->experience === 'positive') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200
                                        @elseif($feedback->experience === 'neutral') bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200
                                        @else bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200 @endif">
                                        {{ __("messages.t_{$feedback->experience}") }}
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4">
                                <p class="text-gray-700 dark:text-gray-300">
                                    {{ $feedback->detail }}
                                </p>
                            </div>

                            @if ($feedback->rating)
                                <div class="mt-4">
                                    <div class="flex items-center">
                                        <span
                                            class="text-sm text-gray-500 dark:text-gray-400 mr-2">{{ __('messages.t_rating') }}:</span>
                                        <div class="flex items-center">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <svg class="w-4 h-4 {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-gray-300 dark:text-gray-600' }}"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="text-gray-400 dark:text-gray-500">
                        <svg class="mx-auto h-12 w-12 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">
                            {{ __('messages.t_no_feedback_yet') }}
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            {{ __('messages.t_no_feedback_message') }}
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
