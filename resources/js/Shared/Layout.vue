<template>
  <div>
    <portal-target name="dropdown" slim />
    <div class="md:flex md:flex-col">
      <div class="md:h-screen md:flex md:flex-col">
        <div class="md:flex md:flex-shrink-0">
          <div class="flex items-center justify-between px-6 py-4 bg-indigo-900 md:flex-shrink-0 md:w-56 md:justify-center">
            <inertia-link class="mt-1" href="/">
              <logo class="fill-white" width="120" height="28" />
            </inertia-link>
            <dropdown class="md:hidden" placement="bottom-end">
              <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
              <div slot="dropdown" class="px-8 py-4 mt-2 bg-indigo-800 rounded shadow-lg">
                <main-menu />
              </div>
            </dropdown>
          </div>
          <div class="flex items-center justify-between w-full p-4 text-sm bg-white border-b md:py-0 md:px-12 md:text-md">
            <div class="mt-1 mr-4">{{ $page.props.auth.user.account.name }}</div>
            <dropdown class="mt-1" placement="bottom-end">
              <div class="flex items-center cursor-pointer select-none group">
                <div class="mr-1 text-gray-700 group-hover:text-indigo-600 focus:text-indigo-600 whitespace-nowrap">
                  <span>{{ $page.props.auth.user.first_name }}</span>
                  <span class="hidden md:inline">{{ $page.props.auth.user.last_name }}</span>
                </div>
                <icon class="w-5 h-5 group-hover:fill-indigo-600 fill-gray-700 focus:fill-indigo-600" name="cheveron-down" />
              </div>
              <div slot="dropdown" class="py-2 mt-2 text-sm bg-white rounded shadow-xl">
                <inertia-link class="block px-6 py-2 hover:bg-indigo-500 hover:text-white" :href="route('users.edit', $page.props.auth.user.id)">My Profile</inertia-link>
                <inertia-link class="block px-6 py-2 hover:bg-indigo-500 hover:text-white" :href="route('users')">Manage Users</inertia-link>
                                <inertia-link class="block px-6 py-2 hover:bg-indigo-500 hover:text-white" :href="route('test')">test</inertia-link>
                <inertia-link class="block w-full px-6 py-2 text-left hover:bg-indigo-500 hover:text-white" :href="route('logout')" method="delete" as="button">Logout</inertia-link>
              </div>
            </dropdown>
          </div>
        </div>
        <div class="md:flex md:flex-grow md:overflow-hidden">
          <main-menu class="flex-shrink-0 hidden w-56 p-12 overflow-y-auto bg-indigo-800 md:block" />
          <div class="px-4 py-8 md:flex-1 md:p-12 md:overflow-y-auto" scroll-region>
            <flash-messages />
            <slot />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Icon from '@/Shared/Icon'
import Logo from '@/Shared/Logo'
import Dropdown from '@/Shared/Dropdown'
import MainMenu from '@/Shared/MainMenu'
import FlashMessages from '@/Shared/FlashMessages'

export default {
  components: {
    Dropdown,
    FlashMessages,
    Icon,
    Logo,
    MainMenu,
  },
}
</script>
