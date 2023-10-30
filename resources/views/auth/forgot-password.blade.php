<x-guest-layout>
<div style="direction: rtl">
    <div class="mb-4 text-sm text-gray-600">
        {{ __('نسيت كلمة المرور؟ لا مشكلة، فقط أخبرنا بعنوان البريد الإلكتروني الخاص بك، وسنرسل لك بريد إلكتروني يحوي رابط تستطيع من خلاله إعداد كلمة مرور جديدة') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('الإيميل')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('أرسل') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-guest-layout>
