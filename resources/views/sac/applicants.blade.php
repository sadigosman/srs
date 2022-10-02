<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
  


		 <form action="" method="POST"> {{-- {{ route('welcome') }} --}}
			@csrf

			<div>
				<x-input-label for="fname">First Name</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="fname" aria-placeholder="First Name"/>
			</div>
			<div>
				<x-input-label for="sname" >Second Name</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="sname" aria-placeholder="Second Name"/>
			</div>
			<div>
				<x-input-label for="tname">Third Name</x-input-label>
				<x-text-input class="block mt-1 w-full text-black" type="text" name="tname" aria-placeholder="Third Name"/>
			</div>
			<div>
				<x-input-label for="lname">Last Name</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="lname" aria-placeholder="Last Name"/>
			</div>
			<div>
				<x-input-label for="birth_date">Birth Date</x-input-label>
				<x-text-input class="block mt-1 w-full" type="date" name="birth_date" aria-placeholder="Birth Date"/>
			</div>
			<div>
				<x-input-label for="birth_place">Birth Place</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="birth_place" aria-placeholder="Birth Place"/>
			</div>
			<div>
				<x-input-label for="nic">NIC</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="nic" aria-placeholder="NIC"/>
			</div>
			<div>
				<x-input-label for="nic_issue_date">NIC Issue Date</x-input-label>
				<x-text-input class="block mt-1 w-full" type="date" name="nic_issue_date" aria-placeholder="NIC Issue Date"/>
			</div>
			<div>
				<x-input-label for="nic_issue_place">NIC Issue Place</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="nic_issue_place" aria-placeholder="NIC Issue Place"/>
			</div>
			<div>
				<x-input-label for="address">Address</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="address" aria-placeholder="Address"/>
			</div>
			<div>
				<x-input-label for="mobile">Mobile</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="mobile" aria-placeholder="Mobile"/>
			</div>
			<div>
				<x-input-label for="email">Email</x-input-label>
				<x-text-input class="block mt-1 w-full" type="email" name="email" aria-placeholder="Email"/>
			</div>
			<div>
				<x-input-label for="type">Type</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="type" aria-placeholder="Type"/>
			</div>
			<div>
				<x-input-label for="sex">Sex</x-input-label>
				<x-text-input class="block mt-1 w-full" type="text" name="sex" aria-placeholder="Sex"/>
			</div>
			
			<div>
				<x-primary-button type="submit" class="ml-3">
                    submit
                </x-primary-button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
	</x-app-layout>


