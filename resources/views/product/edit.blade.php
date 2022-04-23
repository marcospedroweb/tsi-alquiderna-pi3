@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Produto</h2>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-primary">Listar produtos</a>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Criar produto</a>
            <a href="{{ route('product.trash') }}" class="btn btn-primary">Lixeira produto</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <form action="{{ route('product.update', $product->id) }}"
        class="row justify-content-center align-items-center needs-validation" enctype="multipart/form-data" novalidate
        method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center mb-3">Editando produto</h3>
        <div class="col-10 mb-3">
            <div class="row justify-content-center align-items-center">
                <div class="col form-floating mb-3">
                    <input value="{{ $product->name }}" required type="text" class="form-control" placeholder="produto"
                        name="name" id="name" maxlength="37">
                    <label style="margin-left: 12px; border: 0;" for="name">Nome do
                        produto</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col">
                    <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                        name="lvlMin">
                        <option disabled>Nivel minimo</option>
                        <option {{ $product->lvlMin === 0 ? 'selected' : '' }} value="0">Nível 0</option>
                        <option {{ $product->lvlMin === 31 ? 'selected' : '' }} value="31">Nível 31</option>
                        <option {{ $product->lvlMin === 61 ? 'selected' : '' }} value="61">Nível 61</option>
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col">
                    <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                        name="lvlMax">
                        <option selected disabled>Nivel maximo</option>
                        <option {{ $product->lvlMax === 30 ? 'selected' : '' }} value="30">Nível 30</option>
                        <option {{ $product->lvlMax === 60 ? 'selected' : '' }} value="60">Nível 60</option>
                        <option {{ $product->lvlMax === 100 ? 'selected' : '' }} value="100">Nível 100</option>
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col mb-3">
                    <label style="margin-left: 12px; border: 0;" for="image" class="form-label">Imagem do
                        produto</label>
                    <input value="{{ $product->image }}" class="form-control" type="file" name="image" id="image"
                        accept=".jpeg , .jpg , .png">
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col form-floating mb-3">
                    <input value="{{ $product->author_name }}" required type="text" class="form-control"
                        placeholder="produto" name="author_name" id="author_name">
                    <label style="margin-left: 12px; border: 0;" for="author_name">Nome do author</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col form-floating mb-3">
                    <input value="{{ $product->author_link }}" required type="text" class="form-control"
                        placeholder="produto" name="author_link" id="author_link">
                    <label style="margin-left: 12px; border: 0;" for="author_link">Link do author</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col form-floating mb-3">
                    <input value="{{ $product->source_website_link }}" required type="text" class="form-control"
                        placeholder="produto" name="source_website_link" id="source_website_link">
                    <label style="margin-left: 12px; border: 0;" for="source_website_link">Link da imagem</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-start">
                <div class="col-6 row justify-content-center align-items-center flex-column">
                    <div class="col">
                        <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                            name="sourceWebsite_id">
                            <option selected disabled>Site fonte</option>
                            @foreach ($sourceWebsites as $sourceWebsite)
                                <option value="{{ $sourceWebsite->id }}"
                                    {{ $product->SourceWebsite->name === $sourceWebsite->name ? 'selected' : '' }}>
                                    {{ $sourceWebsite->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="col">
                        <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                            name="enchant">
                            <option selected disabled>Produto é encantavel?</option>
                            <option {{ $product->enchant === 0 ? 'selected' : '' }} value="0">Não</option>
                            <option {{ $product->enchant === 1 ? 'selected' : '' }} value="1">Sim</option>
                        </select>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="col">
                        <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                            name="category_id" data-category>
                            <option selected disabled>Categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->Category->name === $category->name ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="col">
                        <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                            name="itemClass_id">
                            <option value="0" selected disabled>Classe</option>
                            @foreach ($itemClasses as $itemClass)
                                <option value="{{ $itemClass->id }}" class="d-none"
                                    {{ $product->ItemClass->name === $itemClass->name ? 'selected' : '' }}>
                                    {{ $itemClass->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 row justify-content-center align-items-center">
                    <div class="form-floating mb-3" id="div-input-life">
                        <input value="{{ $product->life }}" required type="number" class="form-control"
                            placeholder="300" id="life" name="life" value="0">
                        <label style="margin-left: 12px; border: 0;" for="life">Atributo de vida</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3" id="div-input-speed">
                        <input value="{{ $product->speed }}" required type="number" class="form-control"
                            placeholder="300" id="speed" name="speed" value="0">
                        <label style="margin-left: 12px; border: 0;" for="speed">Atributo de velocidade</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3" id="div-input-strength">
                        <input value="{{ $product->strength }}" required type="number" class="form-control"
                            placeholder="300" id="strength" name="strength" value="0">
                        <label style="margin-left: 12px; border: 0;" for="strength">Atributo de Força</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3" id="div-input-physical-protection">
                        <input value="{{ $product->physical_protection }}" required type="number" class="form-control"
                            placeholder="300" id="physical_protection" name="physical_protection" value="0">
                        <label style="margin-left: 12px; border: 0;" for="physical_protection">Atributo de proteção
                            física</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3" id="div-input-magic-protection">
                        <input value="{{ $product->magic_protection }}" required type="number" class="form-control"
                            placeholder="300" id="magic_protection" name="magic_protection" value="0">
                        <label style="margin-left: 12px; border: 0;" for="magic_protection">Atributo de proteção
                            mágica</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3" id="div-input-physical-attack">
                        <input value="{{ $product->physical_attack }}" required type="number" class="form-control"
                            placeholder="300" id="physical_attack" name="physical_attack" value="0">
                        <label style="margin-left: 12px; border: 0;" for="physical_attack">Atributo de ataque físico</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3" id="div-input-magic-attack">
                        <input value="{{ $product->magic_attack }}" required type="number" class="form-control"
                            placeholder="300" id="magic_attack" name="magic_attack" value="0">
                        <label style="margin-left: 12px; border: 0;" for="magic_attack">Atributo de ataque mágico</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3" id="div-input-mana">
                        <input value="{{ $product->mana }}" required type="number" class="form-control"
                            placeholder="300" id="mana" name="mana" value="0">
                        <label style="margin-left: 12px; border: 0;" for="mana">Mana</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <select required class="form-select form-select-lg mb-3" aria-label="Default select example" name="new">
                        <option selected disabled>Produto em promoção?</option>
                        <option {{ $product->new === 0 ? 'selected' : '' }} value="0">Não</option>
                        <option {{ $product->new === 1 ? 'selected' : '' }} value="1">Sim</option>
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col">
                    <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                        name="sale">
                        <option selected disabled>Produto em promoção?</option>
                        <option {{ $product->sale === 0 ? 'selected' : '' }} value="0">Não</option>
                        <option {{ $product->sale === 1 ? 'selected' : '' }} value="1">Sim</option>
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col">
                    <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                        name="recommendation">
                        <option selected disabled>Recomendado para...</option>
                        <option {{ $product->recommendation === 'ini' ? 'selected' : '' }} value="ini">iniciantes
                        </option>
                        <option {{ $product->recommendation === 'int' ? 'selected' : '' }} value="int">intermediarios
                        </option>
                        <option {{ $product->recommendation === 'avan' ? 'selected' : '' }} value="avan">avançados
                        </option>
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col" id="col-discount-price">
                    <div class="form-floating mb-3">
                        <input required type="number" class="form-control" placeholder="300" id="price" name="price"
                            value="{{ $product->price }}" max="9999">
                        <label for="price">Preço original</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                </div>
                <div class="col d-none" id="col-discount-price">
                    <div class="form-floating mb-3">
                        <input required type="number" class="form-control" placeholder="300" id="discount_price"
                            name="discount_price" value="{{ $product->descount_price ? $product->descount_price : '0' }}"
                            max="9999">
                        <label for="discount_price">Preço com desconto</label>
                        <div class="invalid-feedback">
                            <span>Dado inválido</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" style="height: 100px;"
                    name="description">{{ $product->description }}</textarea>
                <label for="description" style="margin-left: 12px; border: 0;">Descrição do produto</label>
                <div class="invalid-feedback">
                    <span>Dado inválido</span>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection
