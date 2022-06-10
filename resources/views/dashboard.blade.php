<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
           
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="table-responsive table_jantri">
													<table class="table table-striped table-bordered">
														<tbody>
														@php
															$n=1;
															$in = 1;
															@endphp

															@for($j=1;$j<=20;$j++)
																<tr>
																@for($i=1;$i<=10;$i++)
																	@if($j%2 !=0)
																		@if($n==100)
																			@php
																			$n=00;
																			@endphp
																		@endif
																		
																		<td>{{sprintf('%02d',$n);}}</td>
																		
																		@php 
																		$n++; 
																		@endphp

																	@else
																		@if($in==100)
																			@php
																				$in=00
																			@endphp
																		@endif
																		@php
																			$in = sprintf('%02d',$in);
																		@endphp
																		
																		<td>
																			<input type="number" class="form-control input-text-s hide-c" min="01" max="1000000" onkeyup="if(/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="main[{{$in}}]">
																		</td>
																		@php 
																		$in++; 
																		@endphp
																@endif	
																@endfor
																
																</tr>
															@endfor
															
														</tbody>
													</table>
                </div>
            </div>
      
    </div>
</x-app-layout>
