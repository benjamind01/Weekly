<script setup lang="ts">
defineProps<{
	versions: {
		php: string
		laravel: string
	}
}>()
</script>

<template layout >
	<div class="bg-[#F0F0F0] h-screen w-screen overflow-hidden">
		<div id="header" class="flex flex-row justify-between px-12 py-6 items-center">
			<div>
				<h3 class="font-bold text-3xl">weekly</h3>
			</div>
			<div>
				<ul class="flex flex-row items-center justify-center">
					<li class="px-4">Product</li>
					<li class="px-4">Pricing</li>
					<li class="px-4">Blog</li>
					<li class="px-4">Careers</li>
					<li class="px-4">Contact us</li>
				</ul>
			</div>
			<div>
				<a href="#"><button class="bg-[#E1FA63] py-3 rounded-md px-2 font-semibold">Try Weekly</button></a>
			</div>
		</div>
		<div id="main" class="flex flex-col justify-center items-center mt-28">
			<h2 class="text-[70px] font-bold text-center">The modern<br/>dairy journal</h2>
			<p class="max-w-[600px] text-center text-gray-500 mt-4">The modern dairy journal re-invented in a small websites. Everything is made for us to improve our minds and take a look on the past and the future.</p>
			<div class="flex flex-row mt-8">
				<a href="/register"><button class="bg-[#E1FA63] py-5 mr-4 rounded-md px-10 font-semibold hover:shadow-md hover:scale-[1.02] shadow-lg transition-all">Start Using</button></a>
				<a href="#"><button class="bg-white py-5 ml-4 rounded-md px-10 font-semibold hover:shadow-md hover:scale-[1.02] shadow-lg transition-all">See plans</button></a>
			</div>
		</div>
	</div>
	
</template>
