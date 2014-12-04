<?php

/**
 * This is the model class for table "peliculas".
 *
 * The followings are the available columns in table 'peliculas':
 * @property integer $IDPelicula
 * @property string $NombrePelicula
 * @property string $DuracionPelicula
 * @property string $ClasificacionPelicula
 * @property string $GeneroPelicula
 * @property string $ActoresPelicula
 * @property string $DirectorPelicula
 * @property string $SinopsisPelicula
 * @property string $PosterPelicula
 * @property string $TrailerPelicula
 */
class CompraBoletos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'peliculas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NombrePelicula, DuracionPelicula, ClasificacionPelicula, GeneroPelicula, ActoresPelicula, DirectorPelicula, SinopsisPelicula, PosterPelicula, TrailerPelicula', 'required'),
			array('NombrePelicula', 'length', 'max'=>200),
			array('DuracionPelicula', 'length', 'max'=>4),
			array('ClasificacionPelicula', 'length', 'max'=>3),
			array('GeneroPelicula', 'length', 'max'=>20),
			array('ActoresPelicula, PosterPelicula, TrailerPelicula', 'length', 'max'=>500),
			array('DirectorPelicula', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDPelicula, NombrePelicula, DuracionPelicula, ClasificacionPelicula, GeneroPelicula, ActoresPelicula, DirectorPelicula, SinopsisPelicula, PosterPelicula, TrailerPelicula', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDPelicula' => 'Idpelicula',
			'NombrePelicula' => 'Nombre Pelicula',
			'DuracionPelicula' => 'Duracion Pelicula',
			'ClasificacionPelicula' => 'Clasificacion Pelicula',
			'GeneroPelicula' => 'Genero Pelicula',
			'ActoresPelicula' => 'Actores Pelicula',
			'DirectorPelicula' => 'Director Pelicula',
			'SinopsisPelicula' => 'Sinopsis Pelicula',
			'PosterPelicula' => 'Poster Pelicula',
			'TrailerPelicula' => 'Trailer Pelicula',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDPelicula',$this->IDPelicula);
		$criteria->compare('NombrePelicula',$this->NombrePelicula,true);
		$criteria->compare('DuracionPelicula',$this->DuracionPelicula,true);
		$criteria->compare('ClasificacionPelicula',$this->ClasificacionPelicula,true);
		$criteria->compare('GeneroPelicula',$this->GeneroPelicula,true);
		$criteria->compare('ActoresPelicula',$this->ActoresPelicula,true);
		$criteria->compare('DirectorPelicula',$this->DirectorPelicula,true);
		$criteria->compare('SinopsisPelicula',$this->SinopsisPelicula,true);
		$criteria->compare('PosterPelicula',$this->PosterPelicula,true);
		$criteria->compare('TrailerPelicula',$this->TrailerPelicula,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompraBoletos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
