<div class="{{ $class }}">
    @for($i = 1; $i <=5; $i++)
        @if($rating >= $i)
            <a href="">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                          fill="#F78C07"/>
                </svg>
            </a>
        @else
            <a href="">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                          fill="#E3E3E3"/>
                </svg>
            </a>
        @endif
    @endfor
</div>
