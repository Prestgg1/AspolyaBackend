<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\Category;
use Auth;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Number;

class BlogResource extends Resource
{
  use Translatable;
  

  protected static ?string $model = Blog::class;
  

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
  

  public static function form(Form $form): Form
  {
    return $form
      ->schema([

        TextInput::make('title')
          ->label('Title')
          
          ->required(),
          TextInput::make('user_id')->default(Auth::user()->id)->hidden()
          ->label('User')
          ->required(),
          RichEditor::make('content')->columnSpanFull()
          ->label('Content')
          ->required(),
          SpatieMediaLibraryFileUpload::make('thumbnail')->collection('blogs'),

        Select::make('category_id')
          ->label('Category')
        /*   ->options(Category::all()->pluck('name', 'id')) */
          ->relationship('category', 'name->tr')
          ->required(),

          SpatieTagsInput::make('tags'),
         

        Toggle::make('active')
          ->label('Is Active')
          ->default(true),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('title')
        ->label('Title')
        ->sortable()
        ->searchable()
        ->limit(50),

        TextColumn::make('category')
        ->label('Category')
        ->getStateUsing(function ($record) {
            return $record->category->getTranslation('name', 'az'); 
        })
        ->sortable()
        ->searchable(),
      SpatieTagsColumn::make('tags'),
    BooleanColumn::make('active')
        ->label('Is Active')
        ->sortable(),
      SpatieMediaLibraryImageColumn::make('thumbnail')->collection('blogs')
        ->label('Thumbnail')
        ->collection('blogs'),
      TextColumn::make('user.name')
    ->label('Yazar')
    ->sortable()
    ->searchable(),

    TextColumn::make('created_at')
        ->label('Created At')
        ->dateTime('d.m.Y H:i')
        ->sortable(),
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
      ])->headerActions([
        Tables\Actions\LocaleSwitcher::make(),
    ])
      ->bulkActions([
        Tables\Actions\BulkActionGroup::make([
          Tables\Actions\DeleteBulkAction::make(),
        ]),
      ]);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListBlogs::route('/'),
      'create' => Pages\CreateBlog::route('/create'),
      'edit' => Pages\EditBlog::route('/{record}/edit'),
    ];
  }
}
