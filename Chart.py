import streamlit as st
from datetime import date

from matplotlib import pyplot as plt
import yfinance as yf
# from fbprophet import Prophet
# from fbprophet.plot import plot_plotly
from plotly import graph_objs as go

START = "2016-01-01"
TODAY = date.today().strftime("%Y-%m-%d")
st.title("AIR Trading")
stocks = ("NVIDIA Corporation","Facebook Inc.","Uber Technologies Inc.","Microsoft Corporation","Apple Inc.","Tesla Inc.","Pfizer Inc.","Ford Motor Company","The Coca-Cola Company","SoFi Technologies Inc.")
selected_stocks = st.selectbox("Stock Company", stocks)
n_years = st.slider("Years of prediction:",1,4)
period = n_years* 365

@st.cache
def load_data(ticker):
    data = yf.download(ticker,START,TODAY)
    data.reset_index(inplace=True)
    return data

data_load_state = st.text("Load data...")
data = load_data(selected_stocks)
data_load_state.text("Loading data...done!")

st.subheader('Raw Data')
st.write(data.tail())

def plot_raw_data():
    fig = go.Figure()
    fig.add_trace(go.Scatter(x=data['Date'], y=data['Open'], name='stock_open'))
    fig.add_trace(go.Scatter(x=data['Date'], y=data['Close'], name='stock_close'))
    fig.layout.update(text_title="Time Series Data", xaxis_rangeslider_visible=True)
    st.plotly_chart(fig)

plot_raw_data()