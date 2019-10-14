<div class="profile-sidebar">
        <div class="bio-item">
            <p class="text-grey text-sm">About</p>
            <h2 class="text-black-dark leading-snug font-primary text-center text-sm h-auto font-light">
                {{ $user->bio }}
            </h2>
            <div class="flex items-center justify-center flex-row w-full mt-2">
                <a href="#" class="bg-primary flex rounded items-center justify-center text-black w-1/6 mx-2">Email</a>
            </div>
       </div>
       <span class="dash"></span>
       <div class="bio-item">
            <p class="text-grey text-sm">Skills</p>
            <div class="skills flex flex-row flex-wrap justify-between">
                {{-- We are only displaying 6 of the user's skills --}}
                @forelse($user->skills as $skill)
                   <a href="{{ $skill->path() }}" class="skill-item">
                       {{$skill->label}}
                   </a>                             
                @empty
                   <a href="/skills/passive-photography" class="skill-item">
                       Passive photographer
                   </a>                             
                @endforelse
            </div>

           @if(count($user->skills) > 6)
               <a href="#" class="font-bold text-grey hover:text-black">
                       &CenterDot; &CenterDot; &CenterDot;
               </a>
           @endif
           
       </div>
       <span class="dash"></span>
       <div class="bio-item">
            <p class="text-grey text-sm">Connect</p>
            <div class="skills flex flex-col w-full">
                @foreach ($user->socials as $social)
                   <a href="{{ $social->social_url }}" class="connect-item flex flex-row items-center hover:text-primary">
                       <img src="{{ $social->social_icon }}" class="hover:border-primary border-1 rounded border-grey px-1 py-1 h-6 w-6 mr-4" alt="{{ $social->social_title }}">
                       {{ $social->social_title }}
                   </a>
                @endforeach
            </div>
       </div>
   </div>