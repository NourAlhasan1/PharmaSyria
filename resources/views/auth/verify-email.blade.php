<x-guest-layout>
    <div style="direction:rtl">
    <div class="mb-4 text-sm text-gray-600">
        {{ __('شكراً لإنشاء حسابك! قبل البدء، عليك تأكيد عنوان بريدك الإلكتروني عبر الضغط على الرابط الذي تم إرساله لك عبر البريد، في حال لم تستلم البريد، يمكنك طلب إعادة الإرسال') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('تم إرسال رابط تحقق جديد لعنوان البريد الإلكتروني الذي قمت بتزويده سابقاً') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
    </div>
</x-guest-layout>
