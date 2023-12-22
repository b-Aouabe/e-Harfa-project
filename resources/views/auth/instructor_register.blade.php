<x-guest-layout>
    <h1 class="text-center font-semibold text-2xl mb-3 underline">S'inscrire comme un Enseignant</h1>
    <form method="POST" action="{{ route('instructor.register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

{{--        $table->string('job');--}}
{{--        $table->string('address');--}}
{{--        $table->string('highest_degree_attained');--}}
{{--        $table->string('field_of_study');--}}
{{--        $table->text('teaching_exp');--}}
        <div  class="mt-4">
            <x-input-label for="job" :value="__('Quelle est votre profession')" />
            <x-text-input id="job" class="block mt-1 w-full" type="text" name="job" :value="old('job')" required autocomplete="job" />
            <x-input-error :messages="$errors->get('job')" class="mt-2" />
        </div>

        <div  class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div  class="mt-4">
            <x-input-label for="studyLevel" :value="__('Quel est votre niveau d\'étude?')" />
            <x-text-input id="studyLevel" class="block mt-1 w-full" type="text" name="studyLevel" :value="old('studyLevel')" required autocomplete="studyLevel" />
            <x-input-error :messages="$errors->get('studyLevel')" class="mt-2" />
        </div>

        <div  class="mt-4">
            <x-input-label for="fieldofstudy" :value="__('Quel est votre domaine d\'études?')" />
            <x-text-input id="fieldofstudy" class="block mt-1 w-full" type="text" name="fieldofstudy" :value="old('fieldofstudy')" required autocomplete="fieldofstudy" />
            <x-input-error :messages="$errors->get('fieldofstudy')" class="mt-2" />
        </div>

        <div  class="mt-4">
            <x-input-label for="experience" :value="__('Quelle est votre expérience en enseignement?')" />
            <textarea
                id="experience"
                class="block mt-1 w-full rounded border border-gray-300"
                name="experience"
                rows="5"
                placeholder="Décrire votre éxpérience en enseignement"
                required>

            </textarea>
            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4" x-data="{ showPassword: false }">
            <x-input-label for="password" :value="__('Password')" />

            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password"
                              x-bind:type="showPassword ? 'text' : 'password'"
                />
                <i class="fa-solid fa-eye absolute bottom-3 right-3 cursor-pointer delay-100" @click="showPassword = !showPassword"></i>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4" x-data="{ showPassword: false }">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <div class="relative">
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation"
                              required autocomplete="new-password"
                              x-bind:type="showPassword ? 'text' : 'password'"
                />

                <i class="fa-solid fa-eye absolute bottom-3 right-3 cursor-pointer" @click="showPassword = !showPassword"></i>
            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 ">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
