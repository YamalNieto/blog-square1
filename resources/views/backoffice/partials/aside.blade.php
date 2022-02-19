<aside class="w-48 flex-shrink-0">
    <h4 class="font-semibold mb-4">
        Links
    </h4>
    <ul>
        <li>
            <a  href="{{ route('backoffice.posts.index') }}"
                class="{{ request()->routeIs('backoffice.posts.index') ? 'text-indigo-600' : '' }}"
            >
                All posts
            </a>
        </li>
        <li>
            <a href="{{ route('backoffice.posts.create') }}"
               class="{{ request()->routeIs('backoffice.posts.create') ? 'text-indigo-600' : '' }}"
            >
                New post
            </a>
        </li>
    </ul>
</aside>
