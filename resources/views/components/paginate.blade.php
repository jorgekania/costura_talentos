<div class="flex items-center justify-center py-10 lg:px-0 sm:px-6 px-4">
    <div class="lg:w-3/5 w-full  flex items-center justify-between border-t border-gray-200">

        @if ($vacancies->onFirstPage())
            <div class="flex items-center pr-3 text-gray-600 hover:text-indigo-700">
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.1665 4L4.49984 7.33333" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1.1665 4.00002L4.49984 0.666687" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-sm ml-3 font-medium leading-none ">Anterior</p>
            </div>
        @else
            <div class="flex items-center pr-3 text-gray-600 hover:text-indigo-700 cursor-pointer">
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.1665 4L4.49984 7.33333" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1.1665 4.00002L4.49984 0.666687" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-sm ml-3 font-medium leading-none "><a href="{{ $vacancies->previousPageUrl() }}"
                        rel="prev">Anterior</a></p>
            </div>
        @endif



        <div class="sm:flex hidden">
            @foreach ($vacancies->getUrlRange(1, $vacancies->lastPage()) as $page => $url)
                @if ($page == $vacancies->currentPage())
                    <p
                        class="text-sm font-medium leading-none bg-base text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 pb-3 mr-4 px-2">
                        {{ $page }}</p>
                @else
                    <p
                        class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                        <a href="{{ $url }}">{{ $page }}</a></p>
                @endif
            @endforeach
        </div>


        @if ($vacancies->hasMorePages())
            <div class="flex items-center pl-3 text-gray-600 hover:text-indigo-700 cursor-pointer">
                <p class="text-sm font-medium leading-none mr-3"><a href="{{ $vacancies->nextPageUrl() }}"
                        rel="next">Próximo</a></p>
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9.5 7.33333L12.8333 4" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.5 0.666687L12.8333 4.00002" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        @else
            <div class="flex items-center pl-3 text-gray-600 hover:text-indigo-700">
                <p class="text-sm font-medium leading-none mr-3">Próximo</p>
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9.5 7.33333L12.8333 4" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.5 0.666687L12.8333 4.00002" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        @endif
    </div>
</div>
