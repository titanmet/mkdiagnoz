<?php

namespace app\controllers;

use Yii;
use app\models\Priem;
use app\models\PriemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PriemController implements the CRUD actions for Priem model.
 */
class PriemController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Priem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PriemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Priem model.
     * @param integer $id
     * @param integer $klient_id
     * @param integer $jaloba_id
     * @param integer $pokazatel_jal_id
     * @param integer $pokazatel_live_id
     * @param integer $pokazatel_zabol_id
     * @param integer $pokazatel_osm_id
     * @param integer $pokazatel_obsl_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $klient_id, $jaloba_id, $pokazatel_jal_id, $pokazatel_live_id, $pokazatel_zabol_id, $pokazatel_osm_id, $pokazatel_obsl_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $klient_id, $jaloba_id, $pokazatel_jal_id, $pokazatel_live_id, $pokazatel_zabol_id, $pokazatel_osm_id, $pokazatel_obsl_id),
        ]);
    }

    /**
     * Creates a new Priem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Priem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'klient_id' => $model->klient_id, 'jaloba_id' => $model->jaloba_id, 'pokazatel_jal_id' => $model->pokazatel_jal_id, 'pokazatel_live_id' => $model->pokazatel_live_id, 'pokazatel_zabol_id' => $model->pokazatel_zabol_id, 'pokazatel_osm_id' => $model->pokazatel_osm_id, 'pokazatel_obsl_id' => $model->pokazatel_obsl_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Priem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $klient_id
     * @param integer $jaloba_id
     * @param integer $pokazatel_jal_id
     * @param integer $pokazatel_live_id
     * @param integer $pokazatel_zabol_id
     * @param integer $pokazatel_osm_id
     * @param integer $pokazatel_obsl_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $klient_id, $jaloba_id, $pokazatel_jal_id, $pokazatel_live_id, $pokazatel_zabol_id, $pokazatel_osm_id, $pokazatel_obsl_id)
    {
        $model = $this->findModel($id, $klient_id, $jaloba_id, $pokazatel_jal_id, $pokazatel_live_id, $pokazatel_zabol_id, $pokazatel_osm_id, $pokazatel_obsl_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'klient_id' => $model->klient_id, 'jaloba_id' => $model->jaloba_id, 'pokazatel_jal_id' => $model->pokazatel_jal_id, 'pokazatel_live_id' => $model->pokazatel_live_id, 'pokazatel_zabol_id' => $model->pokazatel_zabol_id, 'pokazatel_osm_id' => $model->pokazatel_osm_id, 'pokazatel_obsl_id' => $model->pokazatel_obsl_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Priem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $klient_id
     * @param integer $jaloba_id
     * @param integer $pokazatel_jal_id
     * @param integer $pokazatel_live_id
     * @param integer $pokazatel_zabol_id
     * @param integer $pokazatel_osm_id
     * @param integer $pokazatel_obsl_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $klient_id, $jaloba_id, $pokazatel_jal_id, $pokazatel_live_id, $pokazatel_zabol_id, $pokazatel_osm_id, $pokazatel_obsl_id)
    {
        $this->findModel($id, $klient_id, $jaloba_id, $pokazatel_jal_id, $pokazatel_live_id, $pokazatel_zabol_id, $pokazatel_osm_id, $pokazatel_obsl_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Priem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $klient_id
     * @param integer $jaloba_id
     * @param integer $pokazatel_jal_id
     * @param integer $pokazatel_live_id
     * @param integer $pokazatel_zabol_id
     * @param integer $pokazatel_osm_id
     * @param integer $pokazatel_obsl_id
     * @return Priem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $klient_id, $jaloba_id, $pokazatel_jal_id, $pokazatel_live_id, $pokazatel_zabol_id, $pokazatel_osm_id, $pokazatel_obsl_id)
    {
        if (($model = Priem::findOne(['id' => $id, 'klient_id' => $klient_id, 'jaloba_id' => $jaloba_id, 'pokazatel_jal_id' => $pokazatel_jal_id, 'pokazatel_live_id' => $pokazatel_live_id, 'pokazatel_zabol_id' => $pokazatel_zabol_id, 'pokazatel_osm_id' => $pokazatel_osm_id, 'pokazatel_obsl_id' => $pokazatel_obsl_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
