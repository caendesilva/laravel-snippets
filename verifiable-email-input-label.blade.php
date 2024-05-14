<div class="w-full flex items-center justify-between">
    <span>
        {{ $label }}
    </span>
    @if($verified)
        <span class="text-xs text-success-500" x-data="{ tooltip: 'Your email has been verified' }" x-tooltip="tooltip">
            Verified
        </span>
    @else
        <span class="text-xs text-warning-600" x-data="{ tooltip: 'Click to resend verification email' }">
            <a href="{{ route('api.verification.resend') }}" x-tooltip="tooltip">Not verified</a>
        </span>
    @endif
</div>
