@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Produto</h2>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-primary">Listar produtos</a>
            <a href="{{ route('product.create') }}" class="btn btn-primary active">Criar produto</a>
            <a href="{{ route('product.trash') }}" class="btn btn-primary">Lixeira produto</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <form action="{{ route('product.store') }}" class="row justify-content-center align-items-center needs-validation"
        method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <h3 class="text-center mb-3">Criando produto</h3>
        <div class="col-10 mb-3">
            <div class="row justify-content-center align-items-center">
                <div class="col form-floating mb-3">
                    <input required type="text" class="form-control" placeholder="produto" name="name" id="name"
                        maxlength="37">
                    <label style="margin-left: 12px; border: 0;" for="name">Nome do
                        produto</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col">
                    <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                        name="lvlMin">
                        <option selected disabled>Nivel minimo</option>
                        <option value="0">Nível 0</option>
                        <option value="31">Nível 31</option>
                        <option value="61">Nível 61</option>
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col">
                    <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                        name="lvlMax">
                        <option selected disabled>Nivel maximo</option>
                        <option value="30">Nível 30</option>
                        <option value="60">Nível 60</option>
                        <option value="100">Nível 100</option>
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col mb-3">
                <label style="margin-left: 12px; border: 0;" for="image" class="form-label">Imagem do
                    produto</label>
                <input required class="form-control" type="file" name="image" id="image" accept=".jpeg , .jpg , .png">
                <div class="invalid-feedback">
                    <span>Dado inválido</span>
                </div>
            </div>
            <div class="col form-floating mb-3">
                <input required type="text" class="form-control" placeholder="produto" name="author_name"
                    id="author_name">
                <label style="margin-left: 12px; border: 0;" for="author_name">Nome do author</label>
                <div class="invalid-feedback">
                    <span>Dado inválido</span>
                </div>
            </div>
            <div class="col form-floating mb-3">
                <input required type="text" class="form-control" placeholder="produto" name="author_link"
                    id="author_link">
                <label style="margin-left: 12px; border: 0;" for="author_link">Link do author</label>
                <div class="invalid-feedback">
                    <span>Dado inválido</span>
                </div>
            </div>
            <div class="col form-floating mb-3">
                <input required type="text" class="form-control" placeholder="produto" name="source_website_link"
                    id="source_website_link">
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
                            <option value="{{ $sourceWebsite->id }}">{{ $sourceWebsite->name }}</option>
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
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
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
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="col">
                    <select required class="form-select form-select-lg mb-3 d-none" aria-label="Default select example"
                        name="itemClass_id">
                        <option value="0" selected disabled>Classe</option>
                        @foreach ($itemClasses as $itemClass)
                            <option value="{{ $itemClass->id }}" class="d-none">{{ $itemClass->name }}
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
                    <input required type="number" class="form-control" placeholder="300" id="life" name="life" value="0">
                    <label style="margin-left: 12px; border: 0;" for="life">Atributo de vida</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="form-floating mb-3" id="div-input-speed">
                    <input required type="number" class="form-control" placeholder="300" id="speed" name="speed"
                        value="0">
                    <label style="margin-left: 12px; border: 0;" for="speed">Atributo de velocidade</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="form-floating mb-3" id="div-input-strength">
                    <input required type="number" class="form-control" placeholder="300" id="strength" name="strength"
                        value="0">
                    <label style="margin-left: 12px; border: 0;" for="strength">Atributo de Força</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="form-floating mb-3" id="div-input-physical-protection">
                    <input required type="number" class="form-control" placeholder="300" id="physical_protection"
                        name="physical_protection" value="0">
                    <label style="margin-left: 12px; border: 0;" for="physical_protection">Atributo de proteção
                        física</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="form-floating mb-3" id="div-input-magic-protection">
                    <input required type="number" class="form-control" placeholder="300" id="magic_protection"
                        name="magic_protection" value="0">
                    <label style="margin-left: 12px; border: 0;" for="magic_protection">Atributo de proteção
                        mágica</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="form-floating mb-3" id="div-input-physical-attack">
                    <input required type="number" class="form-control" placeholder="300" id="physical_attack"
                        name="physical_attack" value="0">
                    <label style="margin-left: 12px; border: 0;" for="physical_attack">Atributo de ataque físico</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="form-floating mb-3" id="div-input-physical-magic">
                    <input required type="number" class="form-control" placeholder="300" id="physical_magic"
                        name="physical_magic" value="0">
                    <label style="margin-left: 12px; border: 0;" for="physical_magic">Atributo de ataque mágico</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
                <div class="form-floating mb-3" id="div-input-mana">
                    <input required type="number" class="form-control" placeholder="300" id="mana" name="mana" value="0">
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
                    <option selected disabled>Lançamento?</option>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <div class="invalid-feedback">
                    <span>Dado inválido</span>
                </div>
            </div>
            <div class="col">
                <select required class="form-select form-select-lg mb-3" aria-label="Default select example" name="sale">
                    <option selected disabled>Produto em promoção?</option>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <div class="invalid-feedback">
                    <span>Dado inválido</span>
                </div>
            </div>
            <div class="col">
                <select required class="form-select form-select-lg mb-3" aria-label="Default select example"
                    name="recommendation">
                    <option selected disabled>Recomendado para...</option>
                    <option value="ini">iniciantes</option>
                    <option value="int">intermediarios</option>
                    <option value="avan">avançados</option>
                </select>
                <div class="invalid-feedback">
                    <span>Dado inválido</span>
                </div>
            </div>
            <div class="col" id="col-original-price">
                <div class="form-floating mb-3">
                    <input required type="number" class="form-control" placeholder="300" id="price" name="price"
                        max="9999">
                    <label for="price">Preço original</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
            </div>
            <div class="col d-none" id="col-discount-price">
                <div class="form-floating mb-3">
                    <input required type="number" class="form-control" placeholder="300" id="discount_price"
                        name="discount_price" value="0" max="9999">
                    <label for="discount_price">Preço com desconto</label>
                    <div class="invalid-feedback">
                        <span>Dado inválido</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="description" style="height: 100px;"
                name="description"></textarea>
            <label for="description" style="margin-left: 12px; border: 0;">Descrição do produto</label>
            <div class="invalid-feedback">
                <span>Dado inválido</span>
            </div>
        </div>
        <div class="text-center mb-6">
            <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
        </div>
    </form>
@endsection
