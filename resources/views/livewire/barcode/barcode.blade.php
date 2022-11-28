@foreach($data as $product)
							<tr>
								<td>
									<h6 class="text-left">{{$product->name}}</h6>
								</td>								
								<td>
									<h6 class="text-center">{{$product->barcode}}</h6>
								</td>
								<!-- <td><h6 class="text-center">{{$product->category}}</h6></td> -->
								<td>
									<h6 class="text-center">{{$product->shelf}}</h6>
								</td>
								<td>
									<h6 class="text-center">{{$product->level}}</h6>
								</td>
								<td>
									<h6 class="text-center">{{$product->price}}</h6>
								</td>


								<td>
									<h6 class="text-center {{$product->stock <= $product->alert ? 'text-danger' : '' }} ">
										{{$product->stock}}
									</h6>
								</td>


								<td>
									<h6 class="text-center">{{$product->alert}}</h6>
								</td>

								<td class="text-center">
									<span>
										<img src="{{ asset('storage/products/' . $product->imagen ) }}" alt="imagen de ejemplo" height="70" width="80" class="rounded">
									</span>
								</td>

							
							</tr>
							@endforeach