<?php

/**
 * This is the model class for table "contenidos".
 *
 * The followings are the available columns in table 'contenidos':
 * @property integer $id_contenido
 * @property string $cod_content
 * @property string $nom_content
 * @property string $des_content
 * @property string $est_content
 * @property integer $activo
 * @property string $fregistro
 * @property string $fmodif
 */
class Contenidos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contenidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contenidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('cod_content, nom_content, des_content, fregistro', 'required'),
			array('cod_content, nom_content, des_content', 'required'),
			array('activo', 'numerical', 'integerOnly'=>true),
			array('cod_content', 'length', 'max'=>3),
			array('nom_content', 'length', 'max'=>50),
			array('des_content', 'length', 'max'=>100),
			array('cod_content','unique'),
			array('est_content, fmodif', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_contenido, cod_content, nom_content, des_content, est_content, activo, fregistro, fmodif', 'safe', 'on'=>'search'),
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
			'id_contenido' => 'Id Contenido',
			'cod_content' => 'Cod Content',
			'nom_content' => 'Nom Content',
			'des_content' => 'Des Content',
			'est_content' => 'Est Content',
			'activo' => 'Activo',
			'fregistro' => 'Fregistro',
			'fmodif' => 'Fmodif',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_contenido',$this->id_contenido);
		$criteria->compare('cod_content',$this->cod_content,true);
		$criteria->compare('nom_content',$this->nom_content,true);
		$criteria->compare('des_content',$this->des_content,true);
		$criteria->compare('est_content',$this->est_content,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('fregistro',$this->fregistro,true);
		$criteria->compare('fmodif',$this->fmodif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}