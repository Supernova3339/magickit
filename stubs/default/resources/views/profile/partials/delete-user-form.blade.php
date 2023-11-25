<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <form method="post" action="{{ route('settings.destroy') }}" onsubmit="return confirm('Are you sure?');" class="p-6">
        @csrf
        @method('delete')

        <x-ui.button
            variant="primary"
            submit="true"
            x-data=""
            rounded="md"
        >{{ __('Delete Account') }}</x-ui.button>
    </form>
</section>
