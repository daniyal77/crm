<div class="sidebar-panel">
    <div class="flex h-full grow flex-col bg-white pr-[var(--main-sidebar-width)] dark:bg-navy-750">
        <!-- Sidebar Panel Header -->
        <div class="flex h-18 w-full items-center justify-between pr-4 pl-1">
            <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">کارمندان</p>
            <button @click="$store.global.isSidebarExpanded = false"
                    class="btn size-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        <!-- Sidebar Panel Body -->
        <div x-data="{expandedItem:null}" class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
             x-init="$el._x_simplebar = new SimpleBar($el)" data-simplebar-direction="rtl">
            <ul class="flex flex-1 flex-col px-4 font-inter">
                <li>
                    <a x-data="navLink" href="{{ route('setting.general') }}"
                       :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                       class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                        لیست
                    </a>
                </li>
                <li>
                    <a x-data="navLink" href="{{ route('setting.pay') }}"
                       :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                       class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                        ایجاد
                    </a>
                </li>
                <li>
                    <a x-data="navLink" href="{{ route('setting.pwa') }}"
                       :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                       class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                        ایجاد اکانت در اتوماسیون
                    </a>
                </li>
                <li>
                    <a x-data="navLink" href="{{ route('setting.permission') }}"
                       :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                       class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                        نمودار
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
