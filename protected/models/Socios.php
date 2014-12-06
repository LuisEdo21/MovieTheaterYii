<?php

/**
 * This is the model class for table "socios".
 *
 * The followings are the available columns in table 'socios':
 * @property integer $IDSocio
 * @property string $NombreSocio
 * @property integer $TelefonoSocio
 * @property string $DireccionSocio
 * @property integer $TarjetaSocio
 * @property string $CorreoSocio
 * @property string $ContrasenaSocio
 * @property integer $PuntosSocio
 */
class Socios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'socios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NombreSocio, TelefonoSocio, DireccionSocio, TarjetaSocio, CorreoSocio, ContrasenaSocio, PuntosSocio', 'required'),
			array('TelefonoSocio, TarjetaSocio, PuntosSocio', 'numerical', 'integerOnly'=>true),
			array('NombreSocio, DireccionSocio', 'length', 'max'=>200),
			array('CorreoSocio', 'length', 'max'=>50),
			array('ContrasenaSocio', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDSocio, NombreSocio, TelefonoSocio, DireccionSocio, TarjetaSocio, CorreoSocio, ContrasenaSocio, PuntosSocio', 'safe', 'on'=>'search'),
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
			'IDSocio' => 'Idsocio',
			'NombreSocio' => 'Nombre Socio',
			'TelefonoSocio' => 'Telefono Socio',
			'DireccionSocio' => 'Direccion Socio',
			'TarjetaSocio' => 'Tarjeta Socio',
			'CorreoSocio' => 'Correo Socio',
			'ContrasenaSocio' => 'Contrasena Socio',
			'PuntosSocio' => 'Puntos Socio',
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

		$criteria->compare('IDSocio',$this->IDSocio);
		$criteria->compare('NombreSocio',$this->NombreSocio,true);
		$criteria->compare('TelefonoSocio',$this->TelefonoSocio);
		$criteria->compare('DireccionSocio',$this->DireccionSocio,true);
		$criteria->compare('TarjetaSocio',$this->TarjetaSocio);
		$criteria->compare('CorreoSocio',$this->CorreoSocio,true);
		$criteria->compare('ContrasenaSocio',$this->ContrasenaSocio,true);
		$criteria->compare('PuntosSocio',$this->PuntosSocio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Socios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
