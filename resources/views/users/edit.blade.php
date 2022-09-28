<x-layout>
    <div class="border-x border-gray-700 text-white mx-auto md:w-[600px]">

        <div class="flex border-x border-gray-700 items-center text-white font-bold text-xl p-2 sticky top-0 z-10 main-background opacity-90 backdrop-blur">
            <i class="fa-solid fa-arrow-left"></i>
            <h1 class="ml-6 opacity-100">Thread</h1>
        </div>

        <form method="POST" action="/users/{{$user->id}}" enctype="multipart/form-data" class="mx-16 pt-16">
            @csrf
            {{ method_field('PUT') }}

            <div class="mb-6">
                <img src="{{auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('images/profile-test.jpg')}}" class="rounded-full w-12" alt="">
            </div>

            <div class="mb-6">
                <input
                    type="text"
                    class="main-background border border-gray-800 rounded p-4 w-full"
                    name="name"
                    placeholder="Name"
                    value="{{$user->name}}"
                />
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
        
            <div class="mb-6">
                <input
                    type="text"
                    class="main-background border border-gray-800 rounded p-4 w-full"
                    name="email"
                    placeholder="Email"
                    value="{{$user->email}}"
                />
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6 w-full block md:flex justify-center">
                <select id="form_dob_month" name="dob_month" class="main-background border border-gray-800 p-3 rounded mr-2 w-full">
                    <option value="-">Month</option>
                    <option value="January">January</option>
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
    
                <select id="form_dob_day" name="dob_day" class="main-background border border-gray-800 p-3 mr-2 rounded w-3/8">
                    <option value="-">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>

                <select id="form_dob_year" name="dob_year" class="main-background border border-gray-800 p-3 rounded w-3/8">
                    <option value="-">Year</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                </select>
            </div>



            <div class="mb-6">
                <input
                    type="file"
                    class="border border-gray-800 rounded p-4 w-full"
                    name="image"
                />
        
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input
                    type="password"
                    class="main-background border border-gray-800 rounded p-4 w-full"
                    name="password"
                    placeholder="Password"
                />
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <input
                    type="text"
                    class="main-background border border-gray-800 rounded p-4 w-full"
                    name="handle"
                    value="{{$user->handle}}"
                />
                @error('handle')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>

            
            <div class="mb-6">
                <p>Is this account verified?</p>
                <input type="radio" id="yes" name="verified" value="1">
                <label for="yes">Yes</label><br>
                <input type="radio" id="no" name="verified" value="0">
                <label for="no">No</label>
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 rounded py-2 px-4 hover:bg-black">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-layout>