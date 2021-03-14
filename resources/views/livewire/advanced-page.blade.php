@section('title')
    - Advanced Search
@endsection

<div>

    <div class="container mx-auto mb-2 text-center">
        <div class="block w-full h-full pt-5 text-center">
            <span class="text-4xl text-gray-900 lg:text-6xl faction_header">
                Advanced Search
            </span>
        </div>
    </div>

    <div class="block my-3 border-b border-gray-400 border-dashed"></div>
    <div class="container mx-auto">
        <div class="container grid p-3 mx-auto text-lg lg:grid-cols-3">
            <div class="text-3xl text-center text-gray-900 lg:col-span-3 faction_header">General</div>
            <div class="my-1">
                <label for="character" class="block font-bold">Character Name: </label>
                <input type="text"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none"
                    wire:model.defer="character" name="character" placeholder="Enter Full or Partial Name">
            </div>
            <div class="my-1">
                <label for="faction" class="block font-bold">Faction: </label>
                <select name="faction" wire:model.defer="faction"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none">
                    <option value=""></option>
                    @foreach ($formFactions as $formFaction)
                        <option value="{{ $formFaction->id }}">{{ $formFaction->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-1">
                <label for="station" class="block font-bold">Station: </label>
                <select name="station" wire:model.defer="station"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none">
                    <option value=""></option>
                    @foreach ($formStations as $formStation)
                        <option value="{{ $formStation->id }}">{{ $formStation->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-1">
                <label for="characteristic" class="block font-bold">Characteristic: </label>
                <select name="characteristic" wire:model.defer="characteristic"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none">
                    <option value=""></option>
                    @foreach ($formCharacteristics as $formCharacteristic)
                        <option value="{{ $formCharacteristic->name }}">{{ $formCharacteristic->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container grid p-3 mx-auto text-lg lg:grid-cols-3">
            <div class="text-3xl text-center text-gray-900 lg:col-span-3 faction_header">Stats & Abilities</div>
            <div class="my-1 ">
                <label for="cost" class="block font-bold lg:text-right lg:inline-block lg:w-28">Cost: </label>
                <select name="costEval" wire:model.defer="costEval"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value="equals"> = </option>
                    <option value="lsthan">
                        < </option>
                    <option value="grthan"> > </option>
                </select>
                <select name="cost" wire:model.defer="cost"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value=""></option>
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
                </select>
            </div>
            <div class="my-1 ">
                <label for="wounds" class="block font-bold lg:text-right lg:inline-block lg:w-28">Wounds: </label>
                <select name="woundEval" wire:model.defer="woundEval"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value="equals"> = </option>
                    <option value="lsthan">
                        < </option>
                    <option value="grthan"> > </option>
                </select>
                <select name="wounds" wire:model.defer="wounds"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value=""></option>
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
                </select>
            </div>
            <div class="my-1 ">
                <label for="size" class="block font-bold lg:text-right lg:inline-block lg:w-28">Size: </label>
                <select name="szEval" wire:model.defer="szEval"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value="equals"> = </option>
                    <option value="lsthan">
                        < </option>
                    <option value="grthan"> > </option>
                </select>
                <select name="size" wire:model.defer="size"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="my-1 ">
                <label for="mv" class="block font-bold lg:text-right lg:inline-block lg:w-28">Move: </label>
                <select name="mvEval" wire:model.defer="mvEval"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value="equals"> = </option>
                    <option value="lsthan">
                        < </option>
                    <option value="grthan"> > </option>
                </select>
                <select name="mv" wire:model.defer="mv"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value=""></option>
                    <option value="0">0</option>
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
                </select>
            </div>
            <div class="my-1 ">
                <label for="df" class="block font-bold lg:text-right lg:inline-block lg:w-28">Defense: </label>
                <select name="dfEval" wire:model.defer="dfEval"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value="equals"> = </option>
                    <option value="lsthan">
                        < </option>
                    <option value="grthan"> > </option>
                </select>
                <select name="df" wire:model.defer="df"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value=""></option>
                    <option value="0">0</option>
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
                </select>
            </div>
            <div class="my-1 ">
                <label for="dfSuit" class="block font-bold lg:text-right lg:inline-block lg:w-28">Df Suit:
                </label>
                <select name="dfSuit" wire:model.defer="dfSuit"
                    class="w-2/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/2 focus:outline-none">
                    <option value=""></option>
                    <option value="crow">Crow</option>
                    <option value="mask">Mask</option>
                    <option value="ram">Ram</option>
                    <option value="tome">Tome</option>
                </select>
            </div>
            <div class="my-1 ">
                <label for="wp" class="block font-bold lg:text-right lg:inline-block lg:w-28">Willpower: </label>
                <select name="wpEval" wire:model.defer="wpEval"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value="equals"> = </option>
                    <option value="lsthan">
                        < </option>
                    <option value="grthan"> > </option>
                </select>
                <select name="wp" wire:model.defer="wp"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value=""></option>
                    <option value="0">0</option>
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
                </select>
            </div>
            <div class="my-1 ">
                <label for="wpSuit" class="block font-bold lg:text-right lg:inline-block lg:w-28">Wp Suit:
                </label>
                <select name="wpSuit" wire:model.defer="wpSuit"
                    class="w-2/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/2 focus:outline-none">
                    <option value=""></option>
                    <option value="crow">Crow</option>
                    <option value="mask">Mask</option>
                    <option value="ram">Ram</option>
                    <option value="tome">Tome</option>
                </select>
            </div>
            <div class="my-1 ">
                <label for="base" class="block font-bold lg:text-right lg:inline-block lg:w-28">Base Size: </label>
                <select name="baseEval" wire:model.defer="baseEval"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value="equals"> = </option>
                    <option value="lsthan">
                        < </option>
                    <option value="grthan"> > </option>
                </select>
                <select name="base" wire:model.defer="base"
                    class="w-1/3 p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-1/4 focus:outline-none">
                    <option value=""></option>
                    <option value="30">30mm</option>
                    <option value="40">40mm</option>
                    <option value="50">50mm</option>
                </select>
            </div>

        </div>
        <div class="container grid p-3 mx-auto text-lg lg:grid-cols-3">
            <div class="my-1">
                <label for="ability" class="block font-bold">Ability: </label>
                <select name="ability" wire:model.defer="ability"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none">
                    <option value=""></option>
                    @foreach ($formAbilities as $formAbility)
                        <option value="{{ $formAbility->name }}">{{ $formAbility->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-1">
                <label for="abiName" class="block font-bold">or Ability Name:</label>
                <input type="text"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none"
                    wire:model.defer="abiName" name="abiName" placeholder="Enter Full or Partial Name">
            </div>
            <div class="my-1">
                <label for="abiText" class="block font-bold">Ability Text:</label>
                <input type="text"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none"
                    wire:model.defer="abiText" name="abiText" placeholder="Any text, eg: 'burning'">
            </div>
        </div>
        <div class="container grid p-3 mx-auto mt-2 text-lg lg:grid-cols-3">
            <div class="text-3xl text-center text-gray-900 lg:col-span-3 faction_header">Actions & Triggers</div>
            <div class="my-1">
                <label for="action" class="block font-bold">Action: </label>
                <select name="action" wire:model.defer="action"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none">
                    <option value=""></option>
                    @foreach ($formActions as $formAction)
                        <option value="{{ $formAction->name }}">{{ $formAction->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-1">
                <label for="actName" class="block font-bold">or Action Name:</label>
                <input type="text"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none"
                    wire:model.defer="actName" name="actName" placeholder="Enter Full or Partial Name">
            </div>
            <div class="my-1">
                <label for="actText" class="block font-bold">Action Text:</label>
                <input type="text"
                    class="w-full p-1 text-lg bg-gray-200 border border-gray-900 rounded lg:w-3/4 focus:outline-none"
                    wire:model.defer="actText" name="actText" placeholder="Any text, eg: 'burning'">
            </div>
        </div>
        <div class="block mt-3 text-center lg:col-span-2">
            <button wire:click="filter" class="p-2 mx-1 font-bold text-white bg-gray-900 rounded focus:outline-none">
                Search</button>
            <button wire:click="clearFilters"
                class="p-2 mx-1 font-bold text-white bg-gray-900 rounded focus:outline-none">
                Clear</button>
        </div>
    </div>
    @if ($results)

        <div class="block my-3 border-b border-gray-400 border-dashed"></div>
        <div class="container mx-auto mb-2 text-center">
            <div class="block w-full h-full py-2 text-center">
                <span class="text-4xl text-gray-900 lg:text-6xl faction_header">
                    Results
                </span>
            </div>
        </div>
        <div class="text-2xl text-center">Total: {{ count($results) }} Characters</div>
        <div class="container grid mx-auto md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($results as $mini)
                <div class="p-2">
                    <a href="{{ route('character.view', $mini->slug) }}" class="active:outline-none">
                        <img src="\storage\{{ $mini->cards->random()->front }}"
                            class="mx-auto border-2 border-black rounded-lg card__image"></a>
                </div>
            @endforeach
        </div>

    @endif


</div>