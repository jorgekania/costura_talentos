<select name="state" id="state" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
    <option value="AC" data-long-state="Acre" {{ $company->short_state === "AC" ? 'selected' : '' }}>Acre</option>
    <option value="AL" data-long-state="Alagoas" {{ $company->short_state === "AL" ? 'selected' : '' }}>Alagoas</option>
    <option value="AP" data-long-state="Amapá" {{ $company->short_state === "AP" ? 'selected' : '' }}>Amapá</option>
    <option value="AM" data-long-state="Amazonas" {{ $company->short_state === "AM" ? 'selected' : '' }}>Amazonas</option>
    <option value="BA" data-long-state="Bahia" {{ $company->short_state === "BA" ? 'selected' : '' }}>Bahia</option>
    <option value="CE" data-long-state="Ceará" {{ $company->short_state === "CE" ? 'selected' : '' }}>Ceará</option>
    <option value="DF" data-long-state="Distrito" {{ $company->short_state === "DF" ? 'selected' : '' }}>Distrito Federal</option>
    <option value="ES" data-long-state="Espírito" {{ $company->short_state === "ES" ? 'selected' : '' }}>Espírito Santo</option>
    <option value="GO" data-long-state="Goiás" {{ $company->short_state === "GO" ? 'selected' : '' }}>Goiás</option>
    <option value="MA" data-long-state="Maranhão" {{ $company->short_state === "MA" ? 'selected' : '' }}>Maranhão</option>
    <option value="MT" data-long-state="Mato" {{ $company->short_state === "MT" ? 'selected' : '' }}>Mato Grosso</option>
    <option value="MS" data-long-state="Mato" {{ $company->short_state === "MS" ? 'selected' : '' }}>Mato Grosso do Sul</option>
    <option value="MG" data-long-state="Minas" {{ $company->short_state === "MG" ? 'selected' : '' }}>Minas Gerais</option>
    <option value="PA" data-long-state="Pará" {{ $company->short_state === "PA" ? 'selected' : '' }}>Pará</option>
    <option value="PB" data-long-state="Paraíba" {{ $company->short_state === "PB" ? 'selected' : '' }}>Paraíba</option>
    <option value="PR" data-long-state="Paraná" {{ $company->short_state === "PR" ? 'selected' : '' }}>Paraná</option>
    <option value="PE" data-long-state="Pernambuco" {{ $company->short_state === "PE" ? 'selected' : '' }}>Pernambuco</option>
    <option value="PI" data-long-state="Piauí" {{ $company->short_state === "PI" ? 'selected' : '' }}>Piauí</option>
    <option value="RJ" data-long-state="Rio" {{ $company->short_state === "RJ" ? 'selected' : '' }}>Rio de Janeiro</option>
    <option value="RN" data-long-state="Rio" {{ $company->short_state === "RN" ? 'selected' : '' }}>Rio Grande do Norte</option>
    <option value="RS" data-long-state="Rio" {{ $company->short_state === "RS" ? 'selected' : '' }}>Rio Grande do Sul</option>
    <option value="RO" data-long-state="Rondônia" {{ $company->short_state === "RO" ? 'selected' : '' }}>Rondônia</option>
    <option value="RR" data-long-state="Roraima" {{ $company->short_state === "RR" ? 'selected' : '' }}>Roraima</option>
    <option value="SC" data-long-state="Santa" {{ $company->short_state === "SC" ? 'selected' : '' }}>Santa Catarina</option>
    <option value="SP" data-long-state="São" {{ $company->short_state === "SP" ? 'selected' : '' }}>São Paulo</option>
    <option value="SE" data-long-state="Sergipe" {{ $company->short_state === "SE" ? 'selected' : '' }}>Sergipe</option>
    <option value="TO" data-long-state="Tocantins" {{ $company->short_state === "TO" ? 'selected' : '' }}>Tocantins</option>
    <option value="EX" data-long-state="Estrangeiro" {{ $company->short_state === "EX" ? 'selected' : '' }}>Estrangeiro</option>
</select>
